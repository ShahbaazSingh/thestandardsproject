<?php

use Illuminate\Database\Seeder;

class ClassUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_user')->delete();

        DB::table('class_user')->insert(array(
            array('class_id' => 1, 'user_id' => 4),
            array('class_id' => 1, 'user_id' => 5),
            array('class_id' => 1, 'user_id' => 6),
            array('class_id' => 1, 'user_id' => 7),
            array('class_id' => 1, 'user_id' => 8),
            array('class_id' => 1, 'user_id' => 9),
            array('class_id' => 1, 'user_id' => 10),
            array('class_id' => 1, 'user_id' => 11),
            array('class_id' => 1, 'user_id' => 12),
            array('class_id' => 1, 'user_id' => 13),
            array('class_id' => 1, 'user_id' => 14),
            array('class_id' => 1, 'user_id' => 15),
            array('class_id' => 1, 'user_id' => 16),
            array('class_id' => 1, 'user_id' => 17),
            array('class_id' => 1, 'user_id' => 18),
            array('class_id' => 1, 'user_id' => 19),
            array('class_id' => 1, 'user_id' => 20),
            array('class_id' => 1, 'user_id' => 21),
            array('class_id' => 1, 'user_id' => 22),
            array('class_id' => 1, 'user_id' => 23)
        ));

    }
}
