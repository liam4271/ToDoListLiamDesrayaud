@extends('layout')

@section('titre', 'Taches')

@section('content')
    <div class="titre-page">Taches</div>
    <a href="{{ route('home') }}">Retour page d'accueil</a>
    <br>
    <br>
    <br>
    @if($taches->isEmpty())
        <p>Aucune tâche n'a été trouvée.</p>
        <a href="{{ route('createtaches') }}">Ajouter une tache</a>
    @else
        <ul class="liste-tache" >
            @foreach($taches as $tache)
                <li class="tache" style="background-color: {{$tache->categorie->couleur}}; width:30%">
                    <div class="tache-nom">{{ $tache->name }}</div>
                    <div class="tache-description">{{ $tache->date }}</div>
                    <div class="tache-categorie">
                        Catégorie : {{ $tache->categorie_id ? $tache->categorie->name : 'Non définie' }}
                    </div>
                    <div class="tache-actions">
                        <a href="{{ route('tache', $tache->id) }}">Voir</a>
                        <a href="{{ route('editTache', $tache->id) }}">Éditer</a>

                        <form method="POST" action="{{ route('taches.destroy', $tache->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </div>
                </li>
                <br>
            @endforeach
            <li>
                <a href="{{ route('createtaches') }}">Ajouter une tache</a>
            </li>
        </ul>
    @endif
@endsection
