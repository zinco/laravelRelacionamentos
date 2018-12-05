@extends('layouts.bootstrap4')



@section('conteudo')
    <h1>Cadastro Categoria</h1>



   
   
   {!! Form::model($categoria,['route' => ['categoria.update', $categoria->id], 'method' => 'put']) !!}
 
        @include('categoria.form')
   {!! Form::close() !!}
   



   
   
   <!-- mensagens -->
   @if(Session::has('flash_message'))
    

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ok!</strong> {{ Session::get('flash_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
   </div>
    @endif


       @if(Session::has('flash_excluido'))
    

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Ok!</strong> {{ Session::get('flash_excluido') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
   </div>
    @endif



@stop