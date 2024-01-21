<form method="POST">
        @csrf
        @method($tache->id ? 'PUT':'POST')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $tache ? $tache->name : '') }}" >
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ old('date', $tache ? $tache->date : '') }}">
        @error('date')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <select id="categorie_id" name="categorie_id">
            <option value="" {{ (old('categorie_id', $tache ? $tache->categorie_id : '') == '') ? 'selected' : '' }}>Choisir une catégorie</option>
            @foreach($categories as $categorie)
                <option value="{{ $categorie->id }}" {{ (old('categorie_id', $tache ? $tache->categorie_id : '') == $categorie->id) ? 'selected' : '' }}>
                    {{ $categorie->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">{{ 'Envoyer' }}</button>
</form>