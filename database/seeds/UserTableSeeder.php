
<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->delete();
        //this basically plants fake users in a database    
        User::create(array(
        'name'     => 'John Beck',
        'username' => 'teacherone',
        'email'    => 'teacherone@email.com',
        'password' => Hash::make('passwordone'),
        'grade' => 0,
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Joe Biden',
        'username' => 'teachertwo',
        'email'    => 'teachertwo@email.com',
        'password' => Hash::make('passwordtwo'),
        'grade' => 0,
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Ralph Cohen',
        'username' => 'teacherthree',
        'email'    => 'teacherfour@email.com',
        'password' => Hash::make('passwordthree'),
        'grade' => 0,
        'role' => 1,
        ));

        //student inputs

        User::create(array(
            'name'     => 'Sally Rogers',
            'username' => 'studentone',
            'email'    => 'studentone@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Burt Hagard',
            'username' => 'studenttwo',
            'email'    => 'studenttwo@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Josiah Nigel',
            'username' => 'studentthree',
            'email'    => 'studentthree@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Shahbaaz Singh',
            'username' => 'studentfour',
            'email'    => 'studentfour@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Harry Kitchner',
            'username' => 'studentfive',
            'email'    => 'studentfive@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Chanel Halson',
            'username' => 'studentsix',
            'email'    => 'studentsix@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Ryan Domer',
            'username' => 'studentseven',
            'email'    => 'studentseven@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Ian Lampert',
            'username' => 'studenteight',
            'email'    => 'studenteight@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Alaya Kitington',
            'username' => 'studentnine',
            'email'    => 'studentnine@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Jenny Kaur',
            'username' => 'studentten',
            'email'    => 'studentten@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Joseph Bush',
            'username' => 'studenteleven',
            'email'    => 'studenteleven@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Brent Opal',
            'username' => 'studenttwelve',
            'email'    => 'studenttwelve@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Janice Goffer',
            'username' => 'studentthirteen',
            'email'    => 'studentthirteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Holly Krutch',
            'username' => 'studentfourteen',
            'email'    => 'studentfourteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));    

        User::create(array(
            'name'     => 'Joseph Neels',
            'username' => 'studentfifteen',
            'email'    => 'studentfifteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Kally Bush',
            'username' => 'studentsixteen',
            'email'    => 'studentsixteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Jesus Hernandez',
            'username' => 'studentseventeen',
            'email'    => 'studentseventeen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Kabel Brown',
            'username' => 'studenteighteen',
            'email'    => 'studenteighteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Josh Hunter',
            'username' => 'studentnineteen',
            'email'    => 'studentnineteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Jose Kitchner',
            'username' => 'studenttwenty',
            'email'    => 'studenttwenty@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));



        User::create(array(
            'name'     => 'Mitchel Castanza',
            'username' => 'principalone',
            'email'    => 'principalone@email.com',
            'password' => Hash::make('principalone'),
            'grade' => 0,
            'role' => 2,
            ));

    }
}
