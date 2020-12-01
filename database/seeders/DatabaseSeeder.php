<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Project::factory(10)->create();
        $this->call([
        	ProjectSeeder::class,
        ]);
    }
}
