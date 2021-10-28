<?php

use App\Models\Children;
use App\Models\Employee;
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
        // factory(Employee::class, 15)->create();
        factory(Children::class, 15)->create();
    }
}
