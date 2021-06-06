<?php

namespace Database\Seeders;

use App\Models\Employe;
use Carbon\Carbon;
use Database\Factories\EmployeFactory;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employe::factory()
            ->count(100)
            ->create();
    }
}
