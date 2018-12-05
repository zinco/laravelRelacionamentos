
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"> <img class="logo" src="{{URL::asset('img/cash_40532.png')}}" height="40"> Vendas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
          <ul class="navbar-nav ml-auto"> 
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('index') }}">Incio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"><a class="nav-link" href="{{ route('vendas.relatorio') }}"> Relatorios </a></li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Cadastros  </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('categoria.create') }}"> Categorias</a></li>
          <li><a class="dropdown-item" href="{{ route('produto.create') }}"> Produtos </a></li>
          <li><a class="dropdown-item" href="{{ route('vendas.create') }}"> Vendas </a></li>
          </ul>
      </li>

          </ul>
        </div>
    </div> 
</nav>
