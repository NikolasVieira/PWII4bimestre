<h3>Categorias</h3>

@if (session('error'))
    <div class="alert alert-danger" style="margin-top: 0.2rem;">
        {{ session('error') }}
    </div>
@endif

<a href="{{ route('categoria.create') }}">Novo</a>
@if(count($categorias)>0)
<ul>
    @foreach ($categorias as $c)
    <li>
        {{ $c['id'] }} | {{ $c['nome'] }}
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
