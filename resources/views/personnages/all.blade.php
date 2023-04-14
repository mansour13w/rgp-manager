@extends('layout')

@section('contenu')
<h2>Tout les personnages</h2>

<ul>
    @foreach($Allpersonages as $personnage)
    <li>{{ $personnage->nom }}</li>
    
    @endforeach
</ul>

@endsection