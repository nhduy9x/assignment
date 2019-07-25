<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(DB::table('users')->count()<1){

    	$users = [
        	['name' => 'admin', 'email' => 'nhduy9x@gmail.com', 'password' => Hash::make('qawqawQ1')],
        	['name' => 'author', 'email' => 'author@gmail.com', 'password' => Hash::make('123456')]
        ];
        DB::table('users')->insert($users);
    	}

    	
    }
}
