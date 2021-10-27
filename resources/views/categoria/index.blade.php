<h3>Categorias</h3>
<a href="{{ route('index') }}">Inicio</a>
<br>
<a href="{{ route('categoria.create') }}">Novo</a>
@if(count($categoria)>0)
<ul>
    @foreach ($categoria as $c)
    <li>
        {{ $c['id'] }} | {{ $c['categoria_nome'] }}
        <a href="{{ route('categoria.show', $c['id']) }}">Detalhes</a>
        <a href="{{ route('categoria.edit', $c['id']) }}">Alterar</a>
    </li>
        @foreach ($c->produtos as $p)
            <li>
                {{ $p['nome'] }}
            </li>
        @endforeach
    @endforeach

</ul>
@else
    <h3>Não existem categorias cadastrados</h3>
@endif
