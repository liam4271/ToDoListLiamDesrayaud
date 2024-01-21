
@extends('layout')

@section('titre', 'Tâches par Catégorie - ' . $categorie->name)

@section('content')
    <div class="titre-page">Tâches de {{ $categorie->name }}</div>
    <a href="{{ route('home') }}">Retour page d'accueil</a>
    <br>
    <br>
    <br>

    @if($taches->isEmpty())
        <p>Aucune tâche trouvée pour cette catégorie.</p>
    @else
        <ul class="liste-tache">
            @foreach($taches as $tache)
                <li class="tache" style="background-color: {{$tache->categorie->couleur}};">
                    <div class="tache-nom">{{ $tache->name }}</div>
                    <div class="tache-description">{{ $tache->date }}</div>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
