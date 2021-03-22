<?php

namespace Tests\Feature;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_all_employees()
    {
        // $this->withoutExceptionHandling();
        $employeeCollection = Employee::factory()->count(3)->create();

        $response = $this->getJson('/employees');

        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($employeeCollection[0]->name, $responseCollection[0]->name);
        $this->assertEquals($employeeCollection[1]->name, $responseCollection[1]->name);
        $this->assertEquals($employeeCollection[2]->name, $responseCollection[2]->name);
    }

    public function test_can_store_employees()
    {
        $employee = Employee::factory()->make()->toArray();

        $this->postJson('/employees', $employee);

        $this->assertDatabaseHas('employees', $employee);
    }

    public function test_can_find_employees_to_a_given_id()
    {
        $employee = Employee::factory()->create()->toArray();
        $response = $this->get('/employees/' . $employee['id']);
        $responseCollection = $response->getOriginalContent();

        $this->assertEquals($employee['firstname'], $responseCollection['firstname']);
        $this->assertEquals($employee['middlename'], $responseCollection['middlename']);
        $this->assertEquals($employee['lastname'], $responseCollection['lastname']);
    }

    public function test_can_update_employees()
    {
        $employee = Employee::factory()->create();
        $employeeToUpdate = Employee::factory()->make()->toArray();

        $response = $this->putJson('/employees/' . $employee->id, $employeeToUpdate);
        $responseCollection = $response->getOriginalContent();

        $this->assertNotEquals($employee['firstname'], $responseCollection['firstname']);
        $this->assertNotEquals($employee['middlename'], $responseCollection['middlename']);
        $this->assertNotEquals($employee['lastname'], $responseCollection['lastname']);
    }

    public function test_can_delete_employees_of_a_given_id()
    {
        $employee = Employee::factory()->create()->toArray();

        $response = $this->delete('/employees/' . $employee['id']);

        $this->assertDeleted('employees', $employee);
    }
}
