<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') == 'local') {
            $this->call(ReminderTypesTableSeeder::class);
            $this->call(ActivityTypesTableSeeder::class);
            $this->call(CountriesSeederTable::class);
            $this->call(FakeContentTableSeeder::class);
        }

        if (env('APP_ENV') == 'testing') {
            $this->call(ReminderTypesTableSeeder::class);
            $this->call(ActivityTypesTableSeeder::class);
            $this->call(CountriesSeederTable::class);
        }

        if (env('APP_ENV') == 'production') {
            $this->call(ReminderTypesTableSeeder::class);
            $this->call(ActivityTypesTableSeeder::class);
            $this->call(CountriesSeederTable::class);
        }
    }
}
