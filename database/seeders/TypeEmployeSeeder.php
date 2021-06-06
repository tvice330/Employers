<?php

namespace Database\Seeders;

use App\Models\TypeEmploye;
use Illuminate\Database\Seeder;

class TypeEmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEmploye::create([
            'title' => 'ставка',
            'alias' => 'all'
        ]);

        TypeEmploye::create([
            'title' => 'почасовая оплата',
            'alias' => 'hour'
        ]);
    }
}
