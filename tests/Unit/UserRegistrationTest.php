<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_register_a_user_to_the_db()
    {
        //arrange
//        $user = ['username'=>'vimal','email'=>'sample@gmail.com','last_name'=>'sapugala','first_name'=>'buddika'];
//         dd($user1->username);
        //act
        $this->post('/register', ['username'=>'vimal','email'=>'sample@gmail.com','last_name'=>'sapugala','first_name'=>'buddika'] );
        // dd($user1['username']);
        $user2 = User::all();
        dd($user2[0]['username']);
        //assert
//        $this->assertEquals($user1->username,$user2->username);
    }
}
