<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Socialite;
use Validator;
use App\Account;
use App\Helpers\RandomHelper;
use App\Jobs\SendNewUserAlert;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        if (env('APP_DISABLE_SIGNUP') == 'true') {
            abort(403, trans('auth.signup_disabled'));
        }

        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->timezone = config('app.timezone');
        $user->save();

        // create a new account
        $account = new Account;
        $account->api_key = RandomHelper::generateString(30);
        $account->save();

        $user->account_id = $account->id;
        $user->save();

        // send me an alert
        dispatch(new SendNewUserAlert($user));

        return $user;
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // Is there a user already registered?
        $userObject = User::where('email', $user->getEmail())->first();

        if (count($userObject) == 0) {

            // Abort if signup is disabled
            if (env('APP_DISABLE_SIGNUP') == 'true') {
                abort(403);
            }

            $userObject = new User;
            $userObject->first_name = 'Facebook';
            $userObject->last_name = 'User';
            $userObject->email = $user->getEmail();
            $userObject->timezone = config('app.timezone');
            $userObject->save();

            // create a new account
            $account = new Account;
            $account->api_key = RandomHelper::generateString(30);
            $account->save();

            $userObject->account_id = $account->id;
            $userObject->access_token = $user->token;
            $userObject->save();

            // send me an alert
            dispatch(new SendNewUserAlert($userObject));
        }

        Auth::login($userObject);

        return redirect('/dashboard');
    }
}
