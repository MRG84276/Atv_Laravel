<form method="post" action="{{ route('artista.store') }}">
    @csrf
    <input type="text" name="name">
    <input type="text" name="foto_url">
    <input type="text" name="data_origem">
    <button type="submit">Criar</button>
</form>

