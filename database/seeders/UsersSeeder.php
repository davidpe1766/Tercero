<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'rol_id'=>1,
            'name'=>'superAdmin',
            'usu_nombres'=>'David',
            'usu_telefono'=>'1234567891',
            'email'=>'davoo@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'rol_id'=>3,
            'name'=>'saul',
            'usu_nombres'=>'saul',
            'usu_telefono'=>'1234567887',
            'email'=>'fernan@gmail.com',
            'password'=>bcrypt('fernan123')
        ]);

        DB::table('users')->insert([
            'rol_id'=>3,
            'name'=>'luis',
            'usu_nombres'=>'luis perez',
            'usu_telefono'=>'1234567887',
            'email'=>'jluis@gmail.com',
            'password'=>bcrypt('fernan123')
        ]);
 
    }
}
