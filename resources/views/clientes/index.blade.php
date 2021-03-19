@include('layout.header')
@include('layout.menu')
<div class="container corpo">
  <h2>Clientes</h2>

  <div class="row">
      <div class="col">
          <a href="/clientes/novo" class="btn btn-primary">
            Novo cliente 
            <i class="fas fa-plus"></i>
          </a>
      </div>
      <div class="col ">
        <form action="">
          <div class="input-group justify-content-end">
            <div class="form-outline ">
              <input type="search" id="form1" class="form-control" name="pesquisa"/>
              <label class="form-label" for="form1">Pesquisar</label>
            </div>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
    </div>
  </div>
  <div class="row">
      <div class="col">
          <table class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
              </thead>
              @foreach ($clientes as $item)
              <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf_cnpj }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                      <a href="clientes/editar/{{ $item->id }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="clientes/deletar/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Deseja realmente deletar?')">
                        <i class="fas fa-trash"></i>
                      </a>


                    </td>
                </tr>
              </tbody>
              @endforeach
          </table>

        </div>
        <div>
          {{ $clientes->links() }}
        </div>
  </div>
</div>
@include('layout.footer')
