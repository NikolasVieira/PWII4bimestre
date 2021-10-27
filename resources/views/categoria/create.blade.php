<h2>ADICIONAR CATEGORIA</h2>
<hr />
<a href="{{ route('categoria.index') }}">Voltar</a>

<form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="categoria_nome">Nome da Categoria</label>
    <input type="text" id="categoria_nome" name="categoria_nome" placeholder="Nome da Categoria">

    <button type="submit">Adicionar</button>
</form>
