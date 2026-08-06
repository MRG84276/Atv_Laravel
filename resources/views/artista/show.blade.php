<div>
    <li>Nome: {{ $artista->name }}</li>
    <li>Foto: {{ $artista->artista_id  }}</li>
    <li>Inicio de carreira: {{ $artista->data_origem  }}</li>

    <form action="{{ route('artista.destroy', $artista)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="id" hidden value="{{ $artista->id }}"/>
        <button type="submit">X</button>
    </form>
    <a href="{{ route('artista.edit', $artista)}}">Editar Artista</a>
</div>