<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach(range(1,20) as $index){
    	DB::table('projects')->insert([
        	'name' => $faker->word,
        	'pics' => $faker->imageUrl($width = 640, $height = 480, 'technics'),
        	'description' => $faker->paragraph,
        ]);
	
    	}
        

    }
}
