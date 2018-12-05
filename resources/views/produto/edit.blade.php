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
    {!! Form::model($produto,['route' => ['produto.update', $produto->id], 'method' => 'put']) !!}
  
      @include('produto.form')
   {!! Form::close() !!}
   


@stop