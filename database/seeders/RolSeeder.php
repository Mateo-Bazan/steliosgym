<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'id'=>1,
            'nombre'=>'Administrador',
        ] );
            
        DB::table('rol')->insert([
            'id'=>2,
            'nombre'=>'Profesor',
        ] );

        DB::table('rol')->insert([
            'id'=>3,
            'nombre'=>'Cliente',
        ] );		
     
    }
}
