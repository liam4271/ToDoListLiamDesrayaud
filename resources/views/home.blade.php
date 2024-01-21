@extends('layout')

@section('titre', 'To Do List')

@section('content')
    <div class="titre-page">To Do List</div>

    <div class="section categorie-section">
        <h2>Gestion des Catégories</h2>
        <ul class="actions">
            <li><a href="{{ route('allCategorie') }}">Voir les catégories</a></li>
            <li><a href="{{ route('createCategorie') }}">Ajouter une catégorie</a></li>
        </ul>
    </div>

    <div class="section tache-section">
        <h2>Gestion des Tâches</h2>
        <ul class="actions">
            <li><a href="{{ route('allTache') }}">Voir les tâches</a></li>
            <li><a href="{{ route('createtaches') }}">Ajouter une tâche</a></li>
        </ul>
    </div>
@endsection