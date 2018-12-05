<table class="table">
  <thead>
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
      <td> <a href="">{{$categoria->nome}}</a></td>
      <td>{{$categoria->created_at}}</td>
      <td>{{$categoria->updated_at}}</td>
      <td>{!!$categoria->descricao!!}</td>
    <td> 
      
      
      <a href="">Editar</a>/ <a href="">Excluir</a>
      
      
      
       </td>
    </tr>

    @empty
     
    <tr>
      <th colspan='7'>nao há cadastros</th>
    </tr>
    @endforelse
  </tbody>
</table>
