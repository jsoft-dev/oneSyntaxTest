<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_states()
    {
        // $this->withoutExceptionHandling();
        $stateCollection = State::factory()->count(3)->create();

        $response = $this->getJson('/states');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($stateCollection->pluck(['name']),$responseCollection->pluck(['name']));
        
    }

    public function test_can_store_states()
    {
        $state = State::factory()->make()->toArray();

        $this->postJson('/states', $state);

        $this->assertDatabaseHas('states', $state);
    }

    public function test_can_find_states_to_a_given_id()
    {
        $state = State::factory()->create()->toArray();

        $response = $this->get('/states/' . $state['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($state['name'], $responseCollection['name']);
    }

    public function test_can_update_states()
    {
        $state = State::factory()->create();
        $stateToUpdate = State::factory()->make()->toArray();

        $response = $this->putJson('/states/' . $state->id, $stateToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($state->name, $responseCollection->name);
    }

    public function test_can_delete_state_of_a_given_id()
    {
        $state = State::factory()->create()->toArray();

        $response = $this->delete('/states/' . $state['id']);

        $this->assertDeleted('states', $state);
    }
}
