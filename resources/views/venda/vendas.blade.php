@extends('layouts.bootstrap4')



@section('conteudo')

    <h1>Vendas </h1>
    <table class="table" >
        <thead>
            <tr>
                <th scope="col">Vendedor</th>
                <th colspan='2'>{{auth()->user()->name}}</th>
            </tr>
            <tr>
                <th scope="col">Data</th>
                <th colspan='2'>{{$id}}</th>
            </tr>
            <tr>
                <th scope="col" colspan='3'>Produtos</th>
               
            </tr>


             {!! Form::open(['route' => 'vendas.store']) !!}
             
             <tr>
             <th scope="col" >{!!Form::label('nome','Nome')!!} </th>
                <th scope="col"><div class="form-group">
                  
            {!!Form::text('id_produto',null, ['class' => 'form-control','required','placeholder'=>'Produto' ])!!}
           <input type='hidden' value='{{$id}}' name='id_vendas'>
          
     </div></th>
                <th colspan='2'><div class="form-group">
            {!!Form::submit('Adicionar',['class' => 'btn btn-primary'])!!}
    </div></th>
            </tr>

             {!! Form::close() !!}
            <tr>
                <th scope="col">id</th>
                <th>Descricao</th>
                <th>Preço</th>
            </tr>


            <tr>
                <th scope="col">1</th>
                <th>Exemplo</th>
                <th>00.00</th>
            </tr>


             <tr>
                
                <th >total</th>
                <th colspan='2'>00.00</th>
            </tr>
           
        </thead>



        <tbody>
        </tbody>

  </table>

    



 
    

   

@stop