<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_users()
    {

        $uesrCollection = User::factory()->count(3)->create();

        $response = $this->getJson('/users');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals(
            $uesrCollection->pluck(['name', 'id']),
            $responseCollection->pluck(['name', 'id'])
        );
    }

    public function test_can_store_users()
    {


        $user = User::factory()->make()->toArray();

        $this->postJson('/users', $user);

        $this->assertDatabaseHas('users', $user);
    }

    public function test_can_find_users_to_a_given_id()
    {
        $user = User::factory()->create()->toArray();
        $response = $this->get('/users/' . $user['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($user['username'], $responseCollection['username']);
    }

    public function test_can_update_users()
    {
        $user = User::factory()->create();
        $userToUpdate = User::factory()->make()->toArray();

        $response = $this->putJson('/users/' . $user->id, $userToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($user['username'], $responseCollection['username']);
    }

    public function test_can_delete_users_of_a_given_id()
    {
        $user = User::factory()->create()->toArray();

        $response = $this->delete('/users/' . $user['id']);

        $this->assertDeleted('users', $user);
    }
}
