@extends('layout')

@section('contenu')

<h1>tout les utilisateurs</h1>

@foreach($Allutilisateurs as $utilisateur)
<p>{{ $utilisateur->email }}</p>
@endforeach
@endsection