@extends('layouts.bootstrap4')

@section('conteudo')

   
   {!! Form::model($venda,['route' => ['vendas.update', $venda->id], 'method' => 'put']) !!}  

   @include('venda.form')

 {!!Form::submit('Adicionar',['class' => 'btn btn-primary'])!!}
  {!! Form::close() !!}

@stop