<?php

use Illuminate\Database\Seeder;

class UserProficiencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_proficiency')->delete();

        DB::table('user_proficiency')->insert(array(
            array('user_id' => 4, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 4, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 4, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 4, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 4, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 5, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 5, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 5, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 5, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 5, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 6, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 6, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 6, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 6, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 6, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 7, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 7, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 7, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 7, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 7, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 8, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 8, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 8, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 8, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 8, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 9, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 9, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 9, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 9, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 9, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 10, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 10, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 10, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 10, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 10, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 11, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 11, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 11, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 11, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 11, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 12, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 12, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 12, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 12, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 12, 'proficiency_id' => 5, 'grade' => 2),
            array('user_id' => 13, 'proficiency_id' => 1, 'grade' => 2),
            array('user_id' => 13, 'proficiency_id' => 2, 'grade' => 2),
            array('user_id' => 13, 'proficiency_id' => 3, 'grade' => 2),
            array('user_id' => 13, 'proficiency_id' => 4, 'grade' => 2),
            array('user_id' => 13, 'proficiency_id' => 5, 'grade' => 2),
           
        ));
    }
}
