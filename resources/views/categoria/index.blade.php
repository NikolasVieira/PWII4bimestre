<h3>Categorias</h3>
<a href="{{ route('categoria.create') }}">Novo</a>

@if(count($categorias)>0)
<ul>
    @foreach ($categorias as $c)
    <li>
        {{ $c['id'] }} | {{ $c['nome'] }}
        <a href="{{ route('categoria.show', $c['id']) }}">Detalhes</a>
        <a href="{{ route('categoria.edit', $c['id']) }}">Alterar</a>
    </li>
    @endforeach

</ul>
@else
    <h3>Não existem categorias cadastrados</h3>
@endif
