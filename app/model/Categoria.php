<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome','descricao'];//o que o usuario pode inserir
    protected $guarded = ['id', 'created_at', 'update_at'];//o que nao pode ser inserido pelo 


    public function produtos(){
        return $this->belongsTo('App\model\Produto');
      }
  


    public function selectCategorias(){
        //  dd('0k');
          $categorias = $this::all()->where('excluido', '=', '0');;
          $categorias_lista = $categorias->pluck('nome','id');
         // dd($categorias);
          
          return  $categorias_lista;
          
         
  
      }
}
