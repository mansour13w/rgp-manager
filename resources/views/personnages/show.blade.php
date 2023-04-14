@extends('layout')

@section('contenu')
<h2>{{ $personnage->nom }}</h2>

<p>Spécialité : {{ $personnage->specialite }}</p>
@endsection