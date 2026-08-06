<a href="{{ route('musics.create') }}">Criar música</a>
@if (session('success'))
    <span>{{ session('success') }}</span>
@endif
<ul>

@foreach ($musicas as $music)
    <li>{{ $music->titulo }} <a href="/musics/{{ $music->id }}">Detalhes</a> </li>
@endforeach
</ul>