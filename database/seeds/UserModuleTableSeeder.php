<?php

use Illuminate\Database\Seeder;

class UserModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_module')->delete();

        DB::table('user_module')->insert(array(
            array('user_id' => 15, 'module_id' => 1, 'assigned_by' => 1, 'grade' => 80, 'assigned' => '2019-02-10', 'due' => '2019-02-17', 'completed' => '2019-02-16', 'report_link' => '#'),
            array('user_id' => 15, 'module_id' => 2, 'assigned_by' => 1, 'grade' => 87, 'assigned' => '2019-02-05', 'due' => '2019-02-12', 'completed' => '2019-02-12', 'report_link' => '#'),
            array('user_id' => 17, 'module_id' => 1, 'assigned_by' => 1, 'grade' => 90, 'assigned' => '2019-02-10', 'due' => '2019-02-17', 'completed' => '2019-02-13', 'report_link' => '#'),
            array('user_id' => 17, 'module_id' => 2, 'assigned_by' => 1, 'grade' => 55, 'assigned' => '2019-03-11', 'due' => '2019-03-18', 'completed' => '2019-03-15', 'report_link' => '#'),
            array('user_id' => 19, 'module_id' => 1, 'assigned_by' => 1, 'grade' => 80, 'assigned' => '2019-03-11', 'due' => '2019-03-18', 'completed' => '2019-03-17', 'report_link' => '#'),
            array('user_id' => 19, 'module_id' => 2, 'assigned_by' => 1, 'grade' => 79, 'assigned' => '2019-03-09', 'due' => '2019-03-20', 'completed' => '2019-03-14', 'report_link' => '#'),
            array('user_id' => 6, 'module_id' => 1, 'assigned_by' => 1, 'grade' => 97, 'assigned' => '2019-03-01', 'due' => '2019-03-10', 'completed' => '2019-03-03', 'report_link' => '#')
        ));

    }
}
