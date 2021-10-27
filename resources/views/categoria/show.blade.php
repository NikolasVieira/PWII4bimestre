<h2>PREVIEW DO CAPITULO</h2>
<hr />
<a href="{{ route('chapters.index') }}" class="btn btn-secondary mb-3">Voltar</a>

@if($page)
<div class="container" id="cont">
    <div id="flipbook">
        @foreach ($page as $pages)
        <div id="pagina">
            <img src="{{ asset('storage') }}/{{ $pages->path }}" alt="{{ $pages->page_number }}" id="img">
        </div>
        @endforeach
    </div>
</div>
@endif
<hr>
<h2>MAIS INFORMAÇÕES DO CAPITULO</h2>
@if ($chapter)
    <p>
        Id do Capitulo: {{ $chapter->id }}<br>
        Numero do Capitulo: {{ $chapter->chapter_number }}<br>
        Numero de Paginas: {{ $chapter->pages }}</p>
    </p>
@endif

<script type="text/javascript">
    $('#flipbook').turn({
        width:400,
        height:300,
        page:1,
        autoCenter:true,
        duration:1200
    })
</script>


@endsection
