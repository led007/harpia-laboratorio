@include('layout.header')
@include('layout.menu')
<div class="container corpo">
  <h2>{{ isset($cliente) ? 'Editar' : 'Novo' }} cliente</h2>

  <form action="/clientes/salvar" method="POST">
    @csrf
    <input type="hidden" name="id" value="@isset($cliente){{$cliente->id}}@endisset">
    <div class="row">
        <div class="col-6">
            <div class="form-outline">
                <input type="text" name="nome" class="form-control" required value="@isset($cliente){{$cliente->nome}}@endisset">
                <label for="nome" class="form-label">Nome:</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-outline">
                <input type="text" name="cpf_cnpj" class="form-control" required value="@isset($cliente){{$cliente->cpf_cnpj}}@endisset">
                <label for="cpf_cnpj" class="form-label">CPF:</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-outline">
                <input type="email" name="email" class="form-control" value="@isset($cliente){{$cliente->email}}@endisset">
                <label for="email" class="form-label">E-mail:</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-outline">
                <input type="text" name="telefone" class="form-control" value="@isset($cliente){{$cliente->telefone}}@endisset">
                <label for="telefone" class="form-label">Telefone:</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success w-100">
                Salvar 
                <i class="fas fa-save"></i>
            </button>
        </div>
    </div>
  </form>
</div>
@include('layout.footer')
