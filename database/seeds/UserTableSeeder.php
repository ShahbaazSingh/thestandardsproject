
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
    public function run()       //this basically plants fake users in a database
    {
        DB::table('users')->delete();
        User::create(array(
        'name'     => 'John Beck',
        'username' => 'teacherone',
        'email'    => 'johnbeck@email.com',
        'password' => Hash::make('passwordone'),
    ));
    }
}
