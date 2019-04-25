
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
        'email'    => 'johnbeck@email.com',
        'password' => Hash::make('passwordone'),
        'grade' => 0,
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Joe Biden',
        'username' => 'teachertwo',
        'email'    => 'joebiden@email.com',
        'password' => Hash::make('passwordtwo'),
        'grade' => 0,
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Ralph Cohen',
        'username' => 'teacherthree',
        'email'    => 'ralphcohen@email.com',
        'password' => Hash::make('passwordthree'),
        'grade' => 0,
        'role' => 1,
        ));

        //student inputs

        User::create(array(
            'name'     => 'Sally Rogers',
            'username' => 'studentwon',
            'email'    => 'one@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Burt Hagard',
            'username' => 'studenttwo',
            'email'    => 'two@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Josiah Nigel',
            'username' => 'studentthree',
            'email'    => 'three@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Shahbaaz Singh',
            'username' => 'studentfour',
            'email'    => 'four@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Harry Styles',
            'username' => 'studentfive',
            'email'    => 'five@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Channing Tatum',
            'username' => 'studentsix',
            'email'    => 'six@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Ryan Reynolds',
            'username' => 'studentseven',
            'email'    => 'seven@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Ian Lampert',
            'username' => 'studenteight',
            'email'    => 'eight@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Alaya Hunter',
            'username' => 'studentnine',
            'email'    => 'nine@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Jenny Plexazeusnamastesamsara',
            'username' => 'studentten',
            'email'    => 'ten@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Hashbrown Mashbrown',
            'username' => 'studenteleven',
            'email'    => 'eleven@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Jock Bren',
            'username' => 'studenttwelve',
            'email'    => 'twelve@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Kiki Fandango',
            'username' => 'studentthirteen',
            'email'    => 'thirteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Holly Thanthou',
            'username' => 'studentfourteen',
            'email'    => 'fourteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));    

        User::create(array(
            'name'     => 'Joestar Joseph',
            'username' => 'studentfifteen',
            'email'    => 'fifteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Kally Ballajo',
            'username' => 'studentsixteen',
            'email'    => 'sixteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Reijel Rando',
            'username' => 'studentseventeen',
            'email'    => 'seventeen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Kabella Brown',
            'username' => 'studenteighteen',
            'email'    => 'eighteen@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Josh Sinclair',
            'username' => 'studentone',
            'email'    => 'studentone@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));

        User::create(array(
            'name'     => 'Noway Jose',
            'username' => 'studenttwenty',
            'email'    => 'twenty@email.com',
            'password' => Hash::make('passwordone'),
            'grade' => 6,
            'role' => 0,
            ));



        User::create(array(
            'name'     => 'Castanza Stanza',
            'username' => 'principalone',
            'email'    => 'principal@email.com',
            'password' => Hash::make('principal'),
            'grade' => 0,
            'role' => 2,
            ));

    }
}
