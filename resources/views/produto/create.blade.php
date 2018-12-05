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

   {!! Form::open(['route' => 'produto.store']) !!}
      @include('produto.form')
   {!! Form::close() !!}
   
<!-- mensagens -->
@if(Session::has('flash_excluido'))
    

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ok!</strong> {{ Session::get('flash_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
   </div>
    @endif
    
       

</ol>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Criado</th>
      <th scope="col">Modificado</th>
      <th scope="col">Descrição</th>
      <th scope="col">editar</th>
    </tr>
  </thead>



  <tbody>

    @forelse($produtos as $produto)
  <tr>
      <th scope="row">{{$produto->id}}</th>      
      <td> <a href="{{ route('produto.edit',['id'=>$produto->id]) }}">{{$produto->nome}}</a></td>
      <td> {{$produto->categoria}}</td>
      <td>{{$produto->created_at->format('m/d/Y H:i')}}</td>
      <td>{{$produto->updated_at->format('m/d/Y H:i')}}</td>
      <td>{!!$produto->descricao!!}</td>
      <td>
       <!--inicio excluir-->
       {!!Form::open(['action' => ['ProdutoController@destroy',$produto->id],'method' => 'POST', 'class' => 'pull-right'])!!}

        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Excluir',['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <!-- fim excluir -->
      
      
     
      
      
      </td>
    <td> 
    @empty


    <tr>
      <th colspan='7'>nao há cadastros</th>
    </tr>
      @endforelse
  </tbody>
</table>



@stop