<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class cuestionary extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayQuestions = [
            [
                'question_name' => '¿En que año descubrió Colón América?',
                'question_answer'  => '1492',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'El Tratado de Ancón estipulaba un plebiscito en...',
                'question_answer'  => 'Tacna y Arica',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'Cuando un cuerpo pasa de estado liquido a estado gaseoso se le conoce como...',
                'question_answer'  => 'Vaporización',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'El corazon posee 3 auriculas y 2 ventriculos',
                'question_answer'  => 'Falso',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'Un verdadero líder ¿Se hace o nace?',
                'question_answer'  => 'Se nace y se hace',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'Argentina no firmó el tratado defensivo entre Perú y Bolivia de 1873 por temor a una alianza entre Chile y...',
                'question_answer'  => 'Brasil',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => '¿Qué carga tienen los electrones?',
                'question_answer'  => 'Carga negativa',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'Los astronautas tienen mayor masa en la tierra que en la luna. ¿Verdadero o falso?',
                'question_answer'  => 'Falso',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'La Confederación Perú-Boliviana estuvo formada por...',
                'question_answer'  => 'Los tres estados',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ],
            [
                'question_name' => 'Según la Segunda Ley de Newton, ¿a qué es proporcional la fuerza?',
                'question_answer'  => 'A la aceleración',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')  
            ]
        ];

        \DB::table('questions')->insert($arrayQuestions);
    }
}
