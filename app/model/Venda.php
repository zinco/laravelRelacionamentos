<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Produto;
class Venda extends Model
{

    protected $fillable = ['excluido','descricao','total'];//o que o usuario pode inserir

    public function produtos(){        
     
        return $this->belongsToMany('App\model\Produto');

        // return $this->belongsToMany(Produto::class,'produto_venda','produto_id','venda_id');
     }
 
     public function getProdutosListAttribute() {
      
         return $this->produtos()->pluck('id')->toArray();;
         
     }
}


//getProjectsListAttribute
//getProdutosListAttribute