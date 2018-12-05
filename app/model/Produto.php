<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $table ='produtos';
    protected $fillable = ['nome','descricao','categoria_id'];//o que o usuario pode inserir


    public function categoria() {
        return $this->belongsTo('App\model\Categoria');
     }
 
     public function vendas(){
      
         return $this->belongsToMany('App\model\Venda');
     }



     public function selectProdutos() {
        $produtos = $this::all();
        $projectsList = $produtos->pluck('nome','id');

        return $projectsList;
    }


    public function produtosCaterogorias(){
        $lsProdutos =  $this
        ->join('categorias','produtos.categoria_id','=','categorias.id')
        ->select('produtos.id','produtos.nome','produtos.descricao','produtos.created_at','produtos.updated_at','categorias.nome as categoria')
        ->get();
         return $lsProdutos;
       
     }
}
