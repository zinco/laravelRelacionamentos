<?php

use Illuminate\Database\Seeder;

class UsersProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // check if table users is empty
          if(DB::table('produtos')->get()->count() == 0){

            DB::table('produtos')->insert([

                [
                    'nome' => 'HD',                   
                    'descricao' => 'Hd de  500 gb para armazenamento de dados',
                    'categoria_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Mouse',                   
                    'descricao' => 'Mouse optico usb',
                    'categoria_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Office 2013',                   
                    'descricao' => 'Pacote ms office 2013',
                    'categoria_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nome' => 'Photoshop',                   
                    'descricao' => 'Programa para edicao de imagem',
                    'categoria_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[produtos n esta vazia, use o comando php artisan migrate:fresh "; }

    }
    }

