<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    public function testLoginUser()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function testArrayData(){
        $data = [];
        $this->assertEmpty($data);
    }

    public function testDatabaseHasEmail(){

        $this->assertDatabaseHas('users', [
            'email' => 'four@email.com'
        ]);
    }

    public function testDatabaseHasSchool(){

        $this->assertDatabaseHas('classes', ['school' => 'PS101']);
    }

    public function testDatabaseDoesNotHave(){
        $this->assertDatabaseMissing('proficiency', ['name' => 'Philosophy']);
    }

    public function testDoesNotShowView(){
        $response = $this->get('/rail');
        $response->assertStatus(404);
    }

    

}

