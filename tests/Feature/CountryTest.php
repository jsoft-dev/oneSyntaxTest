<?php

namespace Tests\Feature;

use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountryTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_countries()
    {
        $countryCollection = Country::factory()->createMany([
            ['name' => 'India', 'country_code' => 'IN'],
            ['name' => 'Sri-Lanka', 'country_code' => 'LK'],
            ['name' => 'Australia', 'country_code' => 'AU']
        ]);

        $response = $this->getJson('/countries');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($countryCollection[0]->name, $responseCollection[0]->name);
        $this->assertEquals($countryCollection[1]->name, $responseCollection[1]->name);
        $this->assertEquals($countryCollection[2]->name, $responseCollection[2]->name);
    }

    public function test_can_store_countries()
    {
        $country = Country::factory()->make()->toArray();

        $this->postJson('/countries', $country);

        $this->assertDatabaseHas('countries', $country);
    }

    public function test_can_find_countries_to_a_given_id()
    {
        $country = Country::factory()->create()->toArray();

        $response = $this->get('/countries/' . $country['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($country['name'], $responseCollection['name']);
    }

    public function test_can_update_countries()
    {
        $country = Country::factory()->create();
        $countryToUpdate = Country::factory()->make()->toArray();

        $response = $this->putJson('/countries/' . $country->id, $countryToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($country->name, $responseCollection->name);
    }

    public function test_can_delete_department_of_a_given_id()
    {
        $country = Country::factory()->create()->toArray();

        $response = $this->delete('/countries/' . $country['id']);

        $this->assertDeleted('countries', $country);
    }
}
