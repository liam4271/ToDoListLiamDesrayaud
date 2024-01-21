@extends('layout')

@section('titre', 'Détails de la Catégorie')

@section('content')
    <div class="titre-page">Détails de la Catégorie</div>

    @if($categorie)
    <div style="background-color:{{ $categorie->couleur }}; width:30%;" >
        <div class="categorie-details" >
            <div class="categorie-nom">{{ $categorie->name }}</div>
            <div class="categorie-couleur">{{ $categorie->couleur }}</div>
        </div>
        <div class="categorie-actions">
            <a href="{{ route('editCategorie', $categorie->id) }}">Éditer</a>
            <form method="POST" action="{{ route('categories.destroy', $categorie->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
        <br>
        <a href="{{ route('allCategorie') }}">Voir toutes les catégories</a>
    </div>
    @else
        <p>Aucune catégorie trouvée.</p>
    @endif
@endsection
