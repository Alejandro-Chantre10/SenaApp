<?php

namespace Database\Seeders;

use App\Models\Attendant;
use Illuminate\Database\Seeder;

class AttendantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attendant::factory(20)->create();
    }
}
