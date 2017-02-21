<?php

namespace Tests\Unit;

use App\Contact;
use Carbon\Carbon;
use Tests\TestCase;
use App\SignificantOther;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactTest extends TestCase
{
    use DatabaseTransactions;

    public function testGetFirstnameReturnsNullWhenUndefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getFirstName());
    }

    public function testGetFirstnameReturnsNameWhenDefined()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';

        $this->assertEquals(
            'Peter',
            $contact->getFirstName()
        );
    }

    public function testGetsNamesMethods()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = 'H';
        $contact->last_name = 'Gregory';

        $this->assertEquals(
            'Peter H Gregory',
            $contact->getCompleteName()
        );

        $this->assertEquals(
            'Peter',
            $contact->getFirstName()
        );

        $this->assertEquals(
            'Gregory',
            $contact->getLastName()
        );

        $this->assertEquals(
            'H',
            $contact->getMiddleName()
        );

        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = null;
        $contact->last_name = 'Gregory';

        $this->assertEquals(
            'Peter Gregory',
            $contact->getCompleteName()
        );

        $this->assertEquals(
            null,
            $contact->getMiddleName()
        );

        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = null;
        $contact->last_name = null;

        $this->assertEquals(
            'Peter',
            $contact->getCompleteName()
        );

        $this->assertEquals(
            null,
            $contact->getLastName()
        );
    }

    public function testGetAgeReturnsFalseIfNoBirthdateIsDefinedForContact()
    {
        $contact = new Contact;
        $contact->birthdate = null;

        $this->assertNull(
            $contact->getAge()
        );
    }

    public function testGetAgeReturnsAnAgeIfBirthdateIsDefined()
    {
        $dateFiveYearsAgo = Carbon::now()->subYears(25);

        $contact = new Contact;
        $contact->birthdate = $dateFiveYearsAgo;

        $this->assertEquals(
            25,
            $contact->getAge()
        );
    }

    public function testGetBirthdateReturnsNullIfNoBirthdateIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getBirthdate());
    }

    public function testGetBirthdateReturnsCarbonObjectIfBirthdateDefined()
    {
        $contact = factory(\App\Contact::class)->create();

        $this->assertInstanceOf(Carbon::class, $contact->getBirthdate());
    }

    public function testGetInitialsWithAFullName()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = 'H';
        $contact->last_name = 'Gregory';

        $this->assertEquals(
            'PHG',
            $contact->getInitials()
        );
    }

    public function testGetInitialsWithNoMiddleName()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = null;
        $contact->last_name = 'Gregory';

        $this->assertEquals(
            'PG',
            $contact->getInitials()
        );
    }

    public function testGetInitialsWithNoLastName()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = 'H';
        $contact->last_name = null;

        $this->assertEquals(
            'PH',
            $contact->getInitials()
        );
    }

    public function testGetInitialsWithNoMiddleAndLastNames()
    {
        $contact = new Contact;
        $contact->first_name = 'Peter';
        $contact->middle_name = null;
        $contact->last_name = null;

        $this->assertEquals(
            'P',
            $contact->getInitials()
        );
    }

    public function testGetLastActivityDateWithMultipleActivities()
    {
        $contact = factory(\App\Contact::class)->create();

        $activity1 = factory(\App\Activity::class)->create([
            'date_it_happened' => '2015-10-29 10:10:10',
            'contact_id' => $contact->id,
        ]);

        $activity2 = factory(\App\Activity::class)->create([
            'date_it_happened' => '2010-10-29 10:10:10',
            'contact_id' => $contact->id,
        ]);

        $activity3 = factory(\App\Activity::class)->create([
            'date_it_happened' => '1981-10-29 10:10:10',
            'contact_id' => $contact->id,
        ]);

        $timezone = 'America/New_York';
        $this->assertEquals(
            'Oct 29, 2015',
            $contact->getLastActivityDate($timezone)
        );
    }

    public function testGetLastActivityDateWithOneActivity()
    {
        $contact = factory(\App\Contact::class)->create();

        $activity1 = factory(\App\Activity::class)->create([
            'date_it_happened' => '2015-10-29 10:10:10',
            'contact_id' => $contact->id,
        ]);

        $timezone = 'America/New_York';
        $this->assertEquals(
            'Oct 29, 2015',
            $contact->getLastActivityDate($timezone)
        );
    }

    public function testGetLastActivityDateWithNoActivities()
    {
        $contact = new Contact;
        $contact->account_id = 1;
        $contact->id = 1;

        $timezone = 'America/New_York';
        $this->assertEquals(
            null,
            $contact->getLastActivityDate($timezone)
        );
    }

    public function testGetLastCalledWithNullData()
    {
        $contact = new Contact;
        $contact->last_talked_to = null;

        $timezone = 'America/New_York';
        $this->assertEquals(
            null,
            $contact->getLastCalled($timezone)
        );
    }

    public function testGetLastCalledWithData()
    {
        $contact = new Contact;
        $contact->last_talked_to = '2013-10-29 10:10:10';

        $timezone = 'America/New_York';
        $this->assertStringEndsWith(
            'ago',
            $contact->getLastCalled($timezone)
        );
    }

    public function testGetNumberOfReminders()
    {
        $contact = new Contact;
        $contact->number_of_reminders = 3;

        $this->assertEquals(
            3,
            $contact->getNumberOfReminders()
        );
    }

    public function testGetNumberOfGifts()
    {
        $contact = new Contact;
        $contact->number_of_gifts_offered = 3;
        $contact->number_of_gifts_ideas = 2;

        $this->assertEquals(
            5,
            $contact->getNumberOfGifts()
        );
    }

    public function testGetNumberOfActivities()
    {
        $contact = new Contact;
        $contact->number_of_activities = 3;

        $this->assertEquals(
            3,
            $contact->getNumberOfActivities()
        );
    }

    public function testGetAvatarColor()
    {
        $contact = new Contact;
        $contact->default_avatar_color = '#fffeee';

        $this->assertEquals(
            '#fffeee',
            $contact->getAvatarColor()
        );
    }

    public function testSetAvatarColor()
    {
        $contact = factory(\App\Contact::class)->make();

        $this->assertEquals(
            strlen($contact->default_avatar_color) == 7,
            $contact->setAvatarColor()
        );
    }

    public function testGetCityWithNoCityDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getCity());
    }

    public function testGetCityWithCityDefined()
    {
        $city = 'Montreal';

        $contact = new Contact;
        $contact->city = encrypt($city);

        $this->assertEquals(
            decrypt($contact->city),
            $contact->getCity()
        );
    }

    public function testGetPartialAddressReturnsNullIfNoCityIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getPartialAddress());
    }

    public function testGetPartialAddressReturnsCityIfProvinceIsUndefined()
    {
        $contact = new Contact;
        $contact->city = encrypt('Montreal');

        $this->assertEquals(
            'Montreal',
            $contact->getPartialAddress()
        );
    }

    public function testGetPartialAddressReturnsCityAndProvince()
    {
        $contact = new Contact;
        $contact->city = encrypt('Montreal');
        $contact->province = encrypt('QC');

        $this->assertEquals(
            'Montreal, QC',
            $contact->getPartialAddress()
        );
    }

    public function testGetProvinceReturnsNullIfNoProvinceIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getProvince());
    }

    public function testGetProvinceReturnsProvinceWhenDefined()
    {
        $contact = new Contact;
        $contact->province = encrypt('QC');

        $this->assertEquals(
            'QC',
            $contact->getProvince()
        );
    }

    public function testGetStreetReturnsNullIfNoStreetIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getStreet());
    }

    public function testGetStreetReturnsStreetWhenDefined()
    {
        $contact = new Contact;
        $contact->street = encrypt('12 Street Road');

        $this->assertEquals(
            '12 Street Road',
            $contact->getStreet()
        );
    }

    public function testGetPostalCodeReturnsNullIfNoStreetIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getPostalCode());
    }

    public function testGetPostalCodeReturnsStreetWhenDefined()
    {
        $contact = new Contact;
        $contact->postal_code = encrypt('90210');

        $this->assertEquals(
            '90210',
            $contact->getPostalCode()
        );
    }

    public function testGetCountryReturnsNullIfNoStreetIsDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getCountryName());
    }

    public function testGetCountryCodeReturnsStreetWhenDefined()
    {
        $contact = new Contact;
        $contact->country_id = 1;

        $this->assertEquals(
            'United States',
            $contact->getCountryName()
        );
    }

    public function testGetCountryIDReturnsNullIfNotDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getCountryID());
    }

    public function testGetCountryIDReturnsIntegerIfDefined()
    {
        $contact = new Contact;
        $contact->country_id = 3;

        $this->assertInternalType('int', $contact->getCountryID());
    }

    public function testGetCountryISOReturnsNullIfISONotFound()
    {
        $contact = new Contact;
        $contact->country_id = null;

        $this->assertNull($contact->getCountryISO());
    }

    public function testGetCountryISOReturnsTheRightISO()
    {
        $contact = new Contact;
        $contact->country_id = 1;

        $this->assertEquals(
            'us',
            $contact->getCountryISO()
        );
    }

    public function testGetEmailReturnsNullIfEmailIsUndefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getEmail());
    }

    public function testGetEmailReturnsEmailIfDefined()
    {
        $contact = new Contact;
        $contact->email = encrypt('john@gmail.com');

        $this->assertEquals(
            'john@gmail.com',
            $contact->getEmail()
        );
    }

    public function testGetPhoneReturnsNullIfPhoneIsUndefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getPhone());
    }

    public function testGetPhoneReturnsPhoneIfDefined()
    {
        $contact = new Contact;
        $contact->phone_number = encrypt('123 456 7890');

        $this->assertEquals(
            '123 456 7890',
            $contact->getPhone()
        );
    }

    public function testGetKidsWithNoKid()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getKids()->count()
        );
    }

    public function testGetKidsWithKids()
    {
        $user = factory(\App\User::class)->create();

        $contact = factory(\App\Contact::class)->create();

        $kids = factory(\App\Kid::class, 3)->create([
            'child_of_contact_id' => $contact->id,
        ]);

        $this->assertEquals(
            3,
            $contact->getKids()->count()
        );
    }

    public function testgetCurrentSignificantOtherWithNoData()
    {
        $contact = factory(\App\Contact::class)->create();

        $this->assertNull($contact->getCurrentSignificantOther());
    }

    public function testgetCurrentSignificantOther()
    {
        $contact = factory(\App\Contact::class)->create();

        $significantOther = factory(\App\SignificantOther::class)->create([
            'contact_id' => $contact->id,
        ]);

        $this->assertInstanceOf(SignificantOther::class, $contact->getCurrentSignificantOther());
    }

    public function testGetNumberOfKidsReturnsAnInteger()
    {
        $contact = new Contact;
        $contact->number_of_kids = 3;

        $this->assertInternalType('int', $contact->getNumberOfKids());
    }

    public function testGetNumberOfNotesReturnsAnInteger()
    {
        $contact = new Contact;
        $contact->number_of_notes = 3;

        $this->assertInternalType('int', $contact->getNumberOfNotes());
    }

    public function testGetNotesReturnsZeroWhenNoNotesAreDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getNotes()->count()
        );
    }

    public function testGetNotesWithData()
    {
        $contact = factory(\App\Contact::class)->create();

        $notes = factory(\App\Note::class, 3)->create([
            'contact_id' => $contact->id,
        ]);

        $this->assertEquals(
            3,
            $contact->getNotes()->count()
        );
    }

    public function testGetFoodPreferenciesReturnsNullWhenNotDefined()
    {
        $contact = new Contact;

        $this->assertNull($contact->getFoodPreferencies());
    }

    public function testGetFoodPreferenciesReturnsDataWhenDefined()
    {
        $contact = new Contact;
        $contact->food_preferencies = encrypt('Allergic to peanuts');

        $this->assertEquals(
            'Allergic to peanuts',
            $contact->getFoodPreferencies()
        );
    }

    public function testUpdateFoodPreferenciesSetsNullIfEmptyValueGiven()
    {
        $contact = factory(\App\Contact::class)->create();
        $contact->updateFoodPreferencies('');

        $this->assertNull($contact->food_preferencies);
    }

    public function testUpdateFoodPreferenciesEncryptsTheValue()
    {
        $contact = factory(\App\Contact::class)->make();
        $contact->updateFoodPreferencies('Some value');

        $this->assertEquals(
            'Some value',
            $contact->getFoodPreferencies()
        );
    }

    public function testAddSignificantOtherReturnsInteger()
    {
        $contact = factory(\App\Contact::class)->create();

        $this->assertInternalType(
            'int',
            $contact->addSignificantOther(
                'John',
                'Doe',
                'male',
                'true',
                '2017-01-01',
                1,
                'America/New_York'
            )
        );
    }

    public function testEditSignificantOtherReturnsInteger()
    {
        $contact = factory(\App\Contact::class)->create();
        $significantOther = factory(\App\SignificantOther::class)->create([
            'contact_id' => $contact->id,
        ]);

        $this->assertInternalType(
            'int',
            $contact->editSignificantOther(
                $significantOther->id,
                'John',
                'Doe',
                'male',
                'true',
                '2017-01-01',
                1,
                'America/New_York'
            )
        );
    }

    public function testDeleteSignificantOther()
    {
        $contact = factory(\App\Contact::class)->create();
        $significantOther = factory(\App\SignificantOther::class)->create([
            'contact_id' => $contact->id,
        ]);

        $contact->deleteSignificantOther($significantOther->id);

        $this->assertNull($contact->getCurrentSignificantOther());
    }

    public function testAddKidReturnsInteger()
    {
        $contact = factory(\App\Contact::class)->create();

        $this->assertInternalType(
            'int',
            $contact->addKid(
                'John',
                'male',
                'true',
                '2017-01-01',
                1,
                'America/New_York'
            )
        );
    }

    public function testEditKidReturnsInteger()
    {
        $contact = factory(\App\Contact::class)->create();
        $kid = factory(\App\Kid::class)->create([
            'child_of_contact_id' => $contact->id,
        ]);

        $this->assertInternalType(
            'int',
            $contact->editKid(
                $kid->id,
                'John',
                'male',
                'true',
                '2017-01-01',
                1,
                'America/New_York'
            )
        );
    }

    public function testAddNoteReturnsInteger()
    {
        $contact = factory(\App\Contact::class)->create();

        $this->assertInternalType(
            'int',
            $contact->addNote('This is a test')
        );
    }

    public function testDeleteNote()
    {
        $contact = factory(\App\Contact::class)->create();
        $note = factory(\App\Note::class)->create([
            'contact_id' => $contact->id,
        ]);

        $contact->deleteNote($note->id);

        $this->assertEquals(
            0,
            $contact->getNotes()->count()
        );
    }

    public function testGetActivitiesReturns0WhenNoActivitiesDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getActivities()->count()
        );
    }

    public function testGetActivitiesWithMultipleActivities()
    {
        $contact = factory(\App\Contact::class)->create();

        $activity1 = factory(\App\Activity::class)->create([
            'contact_id' => $contact->id,
        ]);

        $activity2 = factory(\App\Activity::class)->create([
            'contact_id' => $contact->id,
        ]);

        $activity3 = factory(\App\Activity::class)->create([
            'contact_id' => $contact->id,
        ]);

        $this->assertEquals(
            3,
            $contact->getActivities()->count()
        );
    }

    public function testGetRemindersReturns0WhenNoRemindersDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getReminders()->count()
        );
    }

    public function testGetRemindersWithMultipleReminders()
    {
        $contact = factory(\App\Contact::class)->create();

        $reminder1 = factory(\App\Reminder::class)->create([
            'contact_id' => $contact->id,
        ]);

        $reminder2 = factory(\App\Reminder::class)->create([
            'contact_id' => $contact->id,
        ]);

        $reminder3 = factory(\App\Reminder::class)->create([
            'contact_id' => $contact->id,
        ]);

        $this->assertEquals(
            3,
            $contact->getReminders()->count()
        );
    }

    public function testGetGiftsReturns0WhenNoRemindersDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getGifts()->count()
        );
    }

    public function testGetGiftsOfferedReturns0WhenNoRemindersDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getGiftsOffered()->count()
        );
    }

    public function testGetGiftIdeasReturns0WhenNoRemindersDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getGiftIdeas()->count()
        );
    }

    public function testGetTasksInProgressReturns0WhenNoTasksDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getTasksInProgress()->count()
        );
    }

    public function testGetCompletedReturns0WhenNoTasksDefined()
    {
        $contact = new Contact;

        $this->assertEquals(
            0,
            $contact->getCompletedTasks()->count()
        );
    }

    public function testGetAvatarReturnsPath()
    {
        $contact = new Contact;
        $contact->avatar_file_name = 'h0FMvD2cA3r2Q1EtGiv7aq9yl5BoXH2KIenDsoGX.jpg';

        $this->assertEquals(
            '/storage/avatars/h0FMvD2cA3r2Q1EtGiv7aq9yl5BoXH2KIenDsoGX_100.jpg',
            $contact->getAvatarURL(100)
        );
    }

    public function testIsBirthdateApproximate()
    {
        $contact = new Contact;
        $contact->is_birthdate_approximate = 'true';

        $this->assertEquals(
            'true',
            $contact->isBirthdateApproximate()
        );
    }
}
