<?php

namespace Database\Seeders;

use Database\Factories\EmployeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        $this->call(TypeEmployeSeeder::class);
        $this->call(EmployerSeeder::class);
    }
}
