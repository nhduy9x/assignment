<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        if(DB::table('products')->count()<1){
        	for ($i=0; $i <200 ; $i++) { 
        	$name=$faker->realText(25,3);
        	$slug=str_slug($name.'-'.microtime(),'-');
        	$products=[
        		'name'=>$name,
        		'slug'=>$slug,
        		'product_id'=>rand(1,10),
        		'description'=>$faker->realText(200,5),
        		'unit_price'=>rand(13,20),
        		'image'=>$faker->imageUrl($width = 640, $height = 480),
        		'unit'=>rand(2,10)

        	];
        	DB::table('products')->insert($products);
        	}
        }
        
    }
}
