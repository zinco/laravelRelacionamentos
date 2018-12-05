@extends('layouts.bootstrap4')



@section('conteudo')

<h1>Relatorios</h1>
<table class="table table-sm table-dark">
 
    <tr>
    <tr>
        
        <th scope="col">DESCRIÇÃO</th>
        <td>QUANTIDADE</td>
        <td>LISTAR</td>
     </tr>
     <tr> 
   
      <th scope="col">Usuarios</th>
      <td>{{$usuarios}}</td>
      <td><a href="#">Ver</a></td>
     </tr>
     <tr> 
      <th scope="col">Categorias</th>
      <td>{{$categorias}}</td>
      <td><a href="{{route('categoria.index')}}">Ver</a></td>
    </tr>
     <tr> 
      <th scope="col">Produtos</th>
      <td>{{$produtos}}</td>
      <td><a href="{{route('produto.index')}}">Ver</a></td>
      </tr>
     <tr> 
      <th scope="col">Vendas</th>
      <td>{{$vendas}}</td>
      <td><a href="{{route('vendas.index')}}">Ver</a></td>
    </tr>
 
    
</table>


@stop