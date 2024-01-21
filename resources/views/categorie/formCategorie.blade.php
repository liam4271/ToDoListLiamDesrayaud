<form method="POST">
    @csrf
    @method($categorie->id ? 'PUT' : 'POST')

    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" value="{{ old('name', $categorie ? $categorie->name : '') }}" >
    @error('name')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>
    <label for="couleur">Couleur :</label>
    <input type="texte" id="couleur" name="couleur" value="{{ old('couleur', $categorie ? $categorie->couleur : '') }}"></input type>
    @error('couleur')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">{{ 'Envoyer' }}</button>
</form>
