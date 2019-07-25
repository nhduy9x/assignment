<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('posts')->count()<1) {
    		$faker = Faker\Factory::create();
	        for ($i=0; $i < 500; $i++) { 
	        	$title = $faker->realText(100, 1);
	        	$slug = str_slug($title.'-'.microtime(), '-');
	        	$post = [
	        		'title' => $title,
	        		'content' => $faker->realText(500, 3),
	        		'short_desc' => $faker->realText(200, 1),       		
	        		'author' => $faker->name(),
	        		'slug' => $slug,
	        		'cate_id' => rand(1, 10),
	        		'image'=>$faker->imageUrl($width = 640, $height = 480)
	        	];
	        	DB::table('posts')->insert($post);
	        }
    	}
        
    }
}
