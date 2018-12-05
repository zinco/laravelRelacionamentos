@extends('layouts.bootstrap4')



@section('conteudo')


<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th> <td>{{$venda->id}}</td>
    </tr>
    <tr>
      <th scope="col">Descrição</th> <td>{!! $venda->descricao !!}</td>
      </tr>
    <tr>  
      <th scope="col">Total</th> <td>R$ {{($venda->total)?0:"00.00"}}</td>
      </tr>
    <tr> 
      <th scope="col">Criado</th><td>{{$venda->created_at}}</td>
      </tr>
    <tr>
      <th scope="col">Modificado</th><td>{{$venda->updated_at}}</td>
      </tr>
    <tr>
      <th scope="col">editar</th> <td>Editar</td>
    </tr>
  </thead>

<tbody>
<tr>
   
   
   
    
    
   
</tr>
<tr>
    <th colspan='5'>
     Produtos
    </th>
    
    </tr>
<tr>
    <td colspan='5'>
            <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th> 
                    <th>preco</th>        

                </tr>
            </thead >
            <tbody>
            @forelse($venda->produtos as $produto)

            

                <tr>
                
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>R$ 00.00</td>
                </tr>

            @empty

        <tr>
            <th colspan='7'>nao há cadastros</th>
            </tr>
        @endforelse
        </tbody>
            
            </table>       
            
            </td>
        </tr>


        </tbody>

        </table>

   

@stop