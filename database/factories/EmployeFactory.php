<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employe;
use App\Models\TypeEmploye;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $department = Department::get();
        $type_employe = TypeEmploye::get()->random();
        $count = rand(0, 160);
        if($type_employe->alias == 'all') {
            $count = 160;
        }
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->firstName,
            'birthday' => $this->faker->dateTimeThisMonth,
            'department_id' => $department->random()->id,
            'type_employe_id' => $type_employe->id,
            'position' => $this->faker->domainName,
            'count_hours' => $count,
            'amount_hour' => rand(10, 200)
        ];
    }
}
