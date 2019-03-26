<?php

use App\Classes;
use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->delete();
        
        /*$data = array(
            array('grade' => '6','subject' => 'Math','teacher_id' => '1','starts_at' => '10:00:00','ends_at' => '10:45:00','school' => 'PS101','room' => 'A303'),
            array('grade' => '6','subject' => 'Math','teacher_id' => '1','starts_at' => '11:00:00','ends_at' => '11:45:00','school' => 'PS101','room' => 'A303'),
            array('grade' => '6','subject' => 'English','teacher_id' => '2','starts_at' => '10:00:00','ends_at' => '10:45:00','school' => 'PS101','room' => 'B202'),
            array('grade' => '6','subject' => 'English','teacher_id' => '2','starts_at' => '11:00:00','ends_at' => '11:45:00','school' => 'PS101','room' => 'B202'),
            array('grade' => '6','subject' => 'Science','teacher_id' => '3','starts_at' => '10:00:00','ends_at' => '10:45:00','school' => 'PS101','room' => 'A434'),
        );

        Classes::insert($data);*/

        Classes::create(array(
        'grade'     => '6',
        'subject' => 'Math',
        'teacher_id'    => '1',
        'starts_at' => '10:00:00',
        'ends_at' => '10:45:00',
        'school' => 'PS101',
        'room' => 'A303',   
        ));

        Classes::create(array(
        'grade'     => '6',
        'subject' => 'Math',
        'teacher_id'    => '1',
        'starts_at' => '11:00:00',
        'ends_at' => '11:45:00',
        'school' => 'PS101',
        'room' => 'A302',   
        ));

        Classes::create(array(
        'grade'     => '6',
        'subject' => 'English',
        'teacher_id'    => '2',
        'starts_at' => '11:00:00',
        'ends_at' => '11:45:00',
        'school' => 'PS101',
        'room' => 'B212',   
        ));

        Classes::create(array(
        'grade'     => '6',
        'subject' => 'English',
        'teacher_id'    => '2',
        'starts_at' => '12:00:00',
        'ends_at' => '12:45:00',
        'school' => 'PS101',
        'room' => 'B214',   
        ));

        Classes::create(array(
        'grade'     => '6',
        'subject' => 'Science',
        'teacher_id'    => '3',
        'starts_at' => '10:00:00',
        'ends_at' => '10:45:00',
        'school' => 'PS101',
        'room' => 'C454',   
        ));

    }
}
