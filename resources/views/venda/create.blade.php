@extends('layouts.bootstrap4')

@section('conteudo')


 {!! Form::open(['route' => 'vendas.store']) !!}

 @include('venda.form')

 {!! Form::close() !!}
@stop