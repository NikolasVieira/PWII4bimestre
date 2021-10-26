<h3>Produtos</h3>
<a href="{{ route('produto.create') }}">Novo</a>

@if(count($produtos)>0)
<ul>
    @foreach ($produtos as $p)
    <li>
        {{ $p['id'] }} | {{ $p['nome'] }} | {{ $p['preco'] }} | {{ $p['estoque'] }} | {{ $p->categoria->id }}
        <a href="{{ route('produto.show', $p['id']) }}">Detalhes</a>
        <a href="{{ route('produto.edit', $p['id']) }}">Alterar</a>
    </li>
    @endforeach

</ul>
@else
    <h3>Não existem produtos cadastrados</h3>
@endif
