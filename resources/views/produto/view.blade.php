@extends('layouts.bootstrap4')



@section('conteudo')

    <h1>Cadastro Produto</h1>
 <!-- mensagens -->
 @if(Session::has('flash_message'))
    

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ok!</strong> {{ Session::get('flash_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
   </div>
    @endif



    <table>
        <tr>
            <th>Id</th><th>Nome</th><th>Descrição</th><th>Categoria</th><th>Editar</th>
        </tr>
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->user->nome}}</td>
        
        </tr>
    </table>
  



@stop