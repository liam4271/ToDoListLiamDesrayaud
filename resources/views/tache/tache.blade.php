@extends('layout')

@section('titre', 'Détails de la Tâche')

@section('content')
    <div class="titre-page">Détails de la Tâche</div>

    @if($tache)
    <div style="background-color: {{$tache->categorie->couleur}}; width:30%">


        <div class="tache-details">
            <div class="tache-nom">{{ $tache->name }}</div>
            <div class="tache-description">{{ $tache->date }}</div>
        </div>
        <div class="tache-actions">
            <a href="{{ route('editTache', $tache->id) }}">Éditer</a>
            <form method="POST" action="{{ route('taches.destroy', $tache->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
        <br>
        <a href="{{ route('allTache') }}">Voir toutes les taches</a>
    </div>
    @else
        <p>Aucune tâche trouvée.</p>
    @endif
@endsection
