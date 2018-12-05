@extends('layouts.bootstrap4')



@section('conteudo')
<h1>vendas</h1>
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Descrição</th>
      <th scope="col">Total</th>
      <th scope="col">Criado</th>
      <th scope="col">Modificado</th>
      <th scope="col">editar</th>
      <th scope="col">Ver</th>
    </tr>
  </thead>

<tbody>
@forelse($vendas as $venda)

<tr>
  <td>{{$venda->id}}</td>
  <td><a href="{{route('vendas.edit',['id'=>$venda->id])}}">{!!  $venda->descricao !!}</a></td>
  <td>R$ {{($venda->total)?0:"00.00"}}</td>
  <td>{{$venda->created_at}}</td>
  <td>{{$venda->updated_at}}</td>
  <td>
   <!--inicio excluir-->
   {!!Form::open(['action' => ['VendaController@destroy',$venda->id],'method' => 'POST', 'class' => 'pull-right'])!!}

{{ Form::hidden('_method', 'DELETE')}}
{{ Form::submit('Excluir',['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
<!-- fim excluir -->




  
  </td>
  <td><a href="{{route('vendas.show',['id'=>$venda->id])}}" class="btn btn-info">Ver</a></td>
</tr>


@empty

   <tr>
      <th colspan='7'>nao há cadastros</th>
    </tr>
  @endforelse


</tbody>

</table>

   

@stop