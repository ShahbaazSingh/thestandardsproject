
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
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Joe Biden',
        'username' => 'teachertwo',
        'email'    => 'joebiden@email.com',
        'password' => Hash::make('passwordtwo'),
        'role' => 1,
        ));

        User::create(array(
        'name'     => 'Ralph Cohen',
        'username' => 'teacherthree',
        'email'    => 'ralphcohen@email.com',
        'password' => Hash::make('passwordthree'),
        'role' => 1,
        ));

    }
}
