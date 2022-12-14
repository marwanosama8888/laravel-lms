<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Parents::factory(10)->create();
        \App\Models\Grade::factory(10)->create();
        \App\Models\Student::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Classes::factory(10)->create();
        \App\Models\Course::factory(10)->create();
    }
}
