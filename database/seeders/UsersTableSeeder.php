<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		DB::table('users')->insert([
            'id'=>1, 	
            'name'=>'Admin',
            'email'=>'admin@stelios.com', 	
            'email_verified_at'=>NULL,
            'password'=>bcrypt('stelios!2023'),
            'remember_token'=>NULL,
			'rol_id'=>1,
        ] );		

		DB::table('users')->insert([
            'id'=>2, 	
            'name'=>'Profesor',
            'email'=>'profesor@stelios.com', 	
            'email_verified_at'=>NULL,
            'password'=>bcrypt('stelios!2023'),
            'remember_token'=>NULL,
			'rol_id'=>2,
        ] );		
		
		DB::table('users')->insert([
            'id'=>3, 	
            'name'=>'Cliente',
            'email'=>'cliente@stelios.com', 	
            'email_verified_at'=>NULL,
            'password'=>bcrypt('stelios!2023'),
            'remember_token'=>NULL,
			'rol_id'=>3,
        ] );				
    }
}