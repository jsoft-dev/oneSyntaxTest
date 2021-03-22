<?php

namespace Tests\Feature;

use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DepartmentTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_departments()
    {
        $departmentCollection = Department::factory()->createMany([
            ['name' => 'transport'],
            ['name' => 'admin'],
            ['name' => 'operational']
        ]);

        $response = $this->getJson('/departments');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($departmentCollection[0]->name, $responseCollection[0]->name);
        $this->assertEquals($departmentCollection[1]->name, $responseCollection[1]->name);
        $this->assertEquals($departmentCollection[2]->name, $responseCollection[2]->name);
    }

    public function test_can_store_department()
    {

        $department = Department::factory()->make()->toArray();

        $this->postJson('/departments', $department);

        $this->assertDatabaseHas('departments', $department);
    }

    public function test_can_find_department_to_a_given_id()
    {
        $department = Department::factory()->create()->toArray();

        $response = $this->get('/departments/' . $department['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($department['name'], $responseCollection['name']);
    }

    public function test_can_update_department()
    {
        $department = Department::factory()->create();
        $departmentToUpdate = Department::factory()->make()->toArray();

        $response = $this->putJson('/departments/' . $department->id, $departmentToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($department->name, $responseCollection->name);
    }

    public function test_can_delete_department_of_a_given_id()
    {
        $department = Department::factory()->create()->toArray();

        $response = $this->delete('/departments/' . $department['id']);

        $this->assertDeleted('departments', $department);
    }
}
