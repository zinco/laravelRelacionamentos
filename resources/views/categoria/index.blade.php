@extends('layouts.bootstrap4')



@section('conteudo')
    <h1>Cadastro Categoria</h1>



   
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

   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Criado</th>
      <th scope="col">Modificado</th>
      <th scope="col">Descrição</th>
      <th scope="col">editar</th>
    </tr>
  </thead>
  <tbody>
  
    
    @forelse($categorias as $categoria)
    <tr>
      <th scope="row">{{$categoria->id}}</th>      
      <td>  <a href="{{route('categoria.edit',['id'=>$categoria->id])}}">{{$categoria->nome}} </a></td>
      <td>{{$categoria->created_at}}</td>
      <td>{{$categoria->updated_at}}</td>
      <td>{!!$categoria->descricao!!}</td>
    <td> 
      
      
     <!--inicio excluir-->
        {!!Form::open(['action' => ['CategoriaController@destroy',$categoria->id],'method' => 'POST', 'class' => 'pull-right'])!!}

          {{ Form::hidden('_method', 'DELETE')}}
          {{ Form::submit('Excluir',['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
     <!-- fim excluir -->
      
      
      
      </td>
    </tr>

    @empty
     
    <tr>
      <th colspan='7'>nao há cadastros</th>
    </tr>
    @endforelse
  </tbody>
</table>

@stop