<?php

use Illuminate\Database\Seeder;

class UsersCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    
    public function run()
    {
        // check if table users is empty
        if(DB::table('categorias')->get()->count() == 0){

            DB::table('categorias')->insert([

                [
                    'nome' => 'Hardware',                   
                    'descricao' => 'pereifericos para computadores',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Software',                   
                    'descricao' => 'Programa  para computadores',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Outros',                   
                    'descricao' => 'so pra ter mais de duas categorias',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else  { echo "\e[categorias n esta vazia, use o comando php artisan migrate:fresh "; }

    }
    }

