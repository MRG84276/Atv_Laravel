<a href="{{ route('artista.create') }}">Adicionar artista</a>
@if (session('success'))
    <span>{{ session('success') }}</span>
@endif
<ul>

@foreach ($artista as $artistas)
    <li>
        {{ $artistas->name }} <a href="/albuns/{{ $artistas->id }}">Detalhes</a>
    </li>
@endforeach
</ul>