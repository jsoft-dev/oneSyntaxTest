<?php

namespace Tests\Feature;

use App\Models\City;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CityTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_cities()
    {
        // $this->withoutExceptionHandling();
        $cityCollection = City::factory()->count(3)->create();

        $response = $this->getJson('/cities');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($cityCollection[0]->name, $responseCollection[0]->name);
        $this->assertEquals($cityCollection[1]->name, $responseCollection[1]->name);
        $this->assertEquals($cityCollection[2]->name, $responseCollection[2]->name);
    }

    public function test_can_store_cities()
    {
        $city = City::factory()->make()->toArray();

        $this->postJson('/cities', $city);

        $this->assertDatabaseHas('cities', $city);
    }

    public function test_can_find_cities_to_a_given_id()
    {
        $city = City::factory()->create()->toArray();

        $response = $this->get('/cities/' . $city['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($city['name'], $responseCollection['name']);
    }

    public function test_can_update_cities()
    {
        $city = City::factory()->create();
        $cityToUpdate = City::factory()->make()->toArray();

        $response = $this->putJson('/cities/' . $city->id, $cityToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($city->name, $responseCollection->name);
    }

    public function test_can_delete_city_of_a_given_id()
    {
        $city = City::factory()->create()->toArray();

        $response = $this->delete('/cities/' . $city['id']);

        $this->assertDeleted('cities', $city);
    }
}
