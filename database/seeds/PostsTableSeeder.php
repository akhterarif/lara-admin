<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('posts')->truncate();

    	foreach (range(1,10) as $index) {
	        DB::table('posts')->insert([
	            'title'        => $faker->sentence(6),
	            'description'  => $faker->paragraph(6),
                'created_by'   => 1,
	        ]);
        }
    }
}
