<?php

use App\Proficiency;
use Illuminate\Database\Seeder;

class ProficiencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proficiency')->delete();

        Proficiency::create(array(
        'name' => 'M.6.1.1',
        'w' => 'M',
        'x' => '6',
        'y' => '1',
        'z' => '1',
        ));

        Proficiency::create(array(
        'name' => 'M.6.2.1',
        'w' => 'M',
        'x' => '6',
        'y' => '2',
        'z' => '1',
        ));

        Proficiency::create(array(
        'name' => 'M.6.2.2',
        'w' => 'M',
        'x' => '6',
        'y' => '2',
        'z' => '2',
        ));

        Proficiency::create(array(
        'name' => 'M.6.3.1',
        'w' => 'M',
        'x' => '6',
        'y' => '3',
        'z' => '1',
        ));

        Proficiency::create(array(
        'name' => 'M.6.4.1',
        'w' => 'M',
        'x' => '6',
        'y' => '4',
        'z' => '1',
        ));

    }
}
