@extends('layout')

@section('titre', 'Catégories')

@section('content')
    <div class="titre-page">Catégories</div>
    <a href="{{ route('home') }}">Retour page d'accueil</a>
    <br>
    <br>
    <br>
    @if($categories->isEmpty())
        <p>Aucune catégorie n'a été trouvée.</p>
        <a href="{{ route('createCategorie') }}">Ajouter une catégorie</a>
    @else
        <ul class="liste-categorie">
            @foreach($categories as $categorie)
                <li class="categorie" style="background-color:{{ $categorie->couleur }}; width:30%;">
                    <div class="categorie-nom">{{ $categorie->name }}</div>
                    <div class="categorie-couleur">{{ $categorie->couleur }}</div>
                    <div class="categorie-actions">
                        <a href="{{ route('categorie', $categorie->id) }}">Voir</a>
                        <a href="{{ route('editCategorie', $categorie->id) }}">Éditer</a>
                        <a href="{{ route('tachesByCategorie', $categorie->id) }}">Voir les tâches de cette catégorie</a>
                        <form method="POST" action="{{ route('categories.destroy', $categorie->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                </li>
                <br>
            @endforeach
            <li>
                <a href="{{ route('createCategorie') }}">Ajouter une catégorie</a>
            </li>
        </ul>
    @endif
@endsection
