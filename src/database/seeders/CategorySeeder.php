<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'denominacion' => 'ARTES Y HUMANIDADES',
                'img_path' => 'categoriesIcon/arte.png',
            ],
            [
                'id' => 2,
                'denominacion' => 'CIENCIAS AGRARIAS',
                'img_path' => 'categoriesIcon/Ciencias_agrarias.png',
            ],
            [
                'id' => 3,
                'denominacion' => 'CIENCIAS ECONÓMICAS',
                'img_path' => 'categoriesIcon/ciencias_economicas.png',
            ],
            [
                'id' => 4,
                'denominacion' => 'CIENCIAS FÍSICAS E INGENIERÍA',
                'img_path' => 'categoriesIcon/ciencias_fisicas_e_ingenieria.png',
            ],
            [
                'id' => 5,
                'denominacion' => 'CIENCIAS DE LA COMPUTACIÓN',
                'img_path' => 'categoriesIcon/ciencias_de_la_computacion.png',
            ],
            [
                'id' => 6,
                'denominacion' => 'CIENCIAS SOCIALES',
                'img_path' => 'categoriesIcon/ciencias_sociales.png',
            ],
            [
                'id' => 7,
                'denominacion' => 'DERECHO',
                'img_path' => 'categoriesIcon/Derecho.png',
            ],
            [
                'id' => 8,
                'denominacion' => 'DESARROLLO PERSONAL',
                'img_path' => 'categoriesIcon/desarrollo_personal.png',
            ],
            [
                'id' => 9,
                'denominacion' => 'IDIOMAS',
                'img_path' => 'categoriesIcon/idiomas.png',
            ],
            [
                'id' => 10,
                'denominacion' => 'SALUD',
                'img_path' => 'categoriesIcon/Salud.png',
            ],
            [
                'id' => 12,
                'denominacion' => 'DEPORTES',
                'img_path' => 'categoriesIcon/deportes.png',
            ],
            [
                'id' => 13,
                'denominacion' => 'CURSOS',
                'img_path' => 'categoriesIcon/Cursos.png',
            ],
            [
                'id' => 14,
                'denominacion' => 'BACHILLERATO',
                'img_path' => 'categoriesIcon/Bachillerato.png',
            ],
            [
                'id' => 15,
                'denominacion' => 'FORMACIÓN UNIVERSITARIA',
                'img_path' => 'categoriesIcon/formacion_universitaria.png',
            ],
            [
                'id' => 16,
                'denominacion' => 'EDUCACIÓN',
                'img_path' => 'categoriesIcon/educacion.png',
            ],
            [
                'id' => 17,
                'denominacion' => 'FORMACIÓN TERCIARIA',
                'img_path' => 'categoriesIcon/formacion_terciaria.png',
            ],
            [
                'id' => 18,
                'denominacion' => 'TRAMO DE FORMACIÓN PEDAGÓGICA',
                'img_path' => 'categoriesIcon/tramo_de_formacion_pedagogica.png',
            ],
            [
                'id' => 19,
                'denominacion' => 'DIPLOMATURA',
                'img_path' => 'categoriesIcon/diplomatura.png',
            ],
            [
                'id' => 20,
                'denominacion' => 'ACTUALIZACIÓN ACADÉMICA',
                'img_path' => 'categoriesIcon/actualizacion_academica.png',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}