<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert(
            ['cur_titulo'=>'Robotica',
            'cur_descripcion'=>'Principios de la robotica',
            'cur_grupo'=>'Electronica',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d'),
        ]);

        DB::table('cursos')->insert(
            ['cur_titulo'=>'Mantenimineto',
            'cur_descripcion'=>'Mantenimiento electrico',
            'cur_grupo'=>'Electronica',
            'cur_estado'=>1,
            'created_at'=>date('Y-m-d'),
        ]);
        DB::table('cursos')->insert([
            'cur_titulo' => 'Programacion basica',
            'cur_descripcion' => 'Todo lo basico que tienes que saber',
            'cur_grupo' => 'Informatica',
            'cur_estado' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('cursos')->insert([
            'cur_titulo' => 'Enfermeria basica',
            'cur_descripcion' => 'Todo lo basico que se debe saber sobre la enfermeria',
            'cur_grupo' => 'Enfermeria',
            'cur_estado' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('cursos')->insert([
            'cur_titulo' => 'Introducción a la Inteligencia Artificial',
            'cur_descripcion' => 'Conceptos fundamentales de la inteligencia artificial',
            'cur_grupo' => 'Informatica',
            'cur_estado' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('cursos')->insert([
            'cur_titulo' => 'Tratamiento al pasiente',
            'cur_descripcion' => 'Los procesos que se le deberia practicar al pasiente',
            'cur_grupo' => 'Enfermeria',
            'cur_estado' => 1,
            'created_at' => now(),
        ]);
    }
}
