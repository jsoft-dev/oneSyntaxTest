<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'middlename' => $this->faker->firstName,
            'address' => $this->faker->address,
            'department_id' => Department::factory()->create()->id,
            'city_id' => City::factory()->create()->id,
            'state_id' => State::factory()->create()->id,
            'country_id' => Country::factory()->create()->id,
            'zip' => $this->faker->randomAscii,
            'birthdate' => $this->faker->date(),
            'date_hired' => $this->faker->date(),
        ];
    }
}
