<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('modules')->delete();

        Module::create(array(
            'subject'     => 'Math',
            'name' => 'Video 1: Long Division',
            'type'    => 'video',
            'proficiency' => 'M.5.1.1',
            'link' => 'https://reviewgamezone.com/mc/candidate/test/?test_id=16537&title=Adding%20And%20Subtracting%20Fractions',
            ));

        Module::create(array(
            'subject'     => 'Math',
            'name' => 'Multiple Choice 1: Adding Fractions',
            'type'    => 'multiplechoice',
            'proficiency' => 'M.5.2.1',
            'link' => 'https://www.khanacademy.org/math/arithmetic/fraction-arithmetic/arith-review-add-sub-fractions/v/visually-adding-fractions-with-unlike-denominators',
            ));   

        Module::create(array(
            'subject'     => 'Math',
            'name' => 'Video 2: Adding Fractions',
            'type'    => 'video',
            'proficiency' => 'M.5.1.1',
            'link' => '#',
            )); 

        Module::create(array(
            'subject'     => 'Math',
            'name' => 'Multiple Choice 2: Long Division',
            'type'    => 'video',
            'proficiency' => 'M.5.1.1',
            'link' => '#',
            )); 
        
    }
}
