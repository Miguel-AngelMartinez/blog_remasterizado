<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class Unidad2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unidad2')->insert([
            'id' => 1,
            'titulo' => '<h1>Presentacion Distribuida</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 2,
            'titulo' => '<h1>Presentacion remota</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 3,
            'titulo' => '<h1>Proceso distribuido</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 4,
            'titulo' => '<h1>Base de datos remota</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 5,
            'titulo' => '<h1>Base de datos Distribuida</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 6,
            'titulo' => '<h1>Logica de acceso</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 7,
            'titulo' => '<h1>Logica de negocio</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 8,
            'titulo' => '<h1>Nivel vinculado a programacion web</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 9,
            'titulo' => '<h1>Proceso de planificacion en dos niveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 10,
            'titulo' => '<h1>proceso de planificacion en  tres niveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 11,
            'titulo' => '<h1>Proceso de planificacion multiniveles</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 12,
            'titulo' => '<h1>Mantenimiento de aplicaciones multinivel</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 13,
            'titulo' => '<h1>Concepto (MVC) en la arquitectura  cliente servidor</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 14,
            'titulo' => '<h1>Proceo de flujo de control apartir del MVC en arquitectura cliente servidor</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 15,
            'titulo' => '<h1>Concepto de comunicacion orientada a conexion e interfaz de programacion de aplicaciones (API)</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 16,
            'titulo' => '<h1>Proceso de comunicacion orientada a conexiones (api)</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('unidad2')->insert([
            'id' => 17,
            'titulo' => '<h1>Sockets</h1>',
            'contenido' => '<hr/><p class="title" id="DatosP"></p>',
            'img' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
