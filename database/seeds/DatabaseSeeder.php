<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();

        $this->call('UserTableSeeder'); //calls the usertable
        $this->call('ClassTableSeeder'); //calls classtable
        $this->call('ClassUserTableSeeder');
    }
}
