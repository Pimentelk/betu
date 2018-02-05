<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'first' 			=> 'Kevin',
	        'last' 				=> 'Pimentel',
	        'email' 			=> 'PimentelKevin06@gmail.com',
	        'phone' 			=> '8638525694',
	        'password' 			=> bcrypt('belkin56'),
	        'remember_token'	=> str_random(10),
    	]);
    }
}
