<a href="{{ route('album.create') }}">Adicionar album</a>
@if (session('success'))
    <span>{{ session('success') }}</span>
@endif
<ul>

@foreach ($album as $albuns)
    <li>
        {{ $albuns->titulo }} <a href="/albuns/{{ $albuns->id }}">Detalhes</a>
    </li>
@endforeach
</ul>