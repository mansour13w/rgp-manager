@extends('layout')

@section('contenu')
<h1>World of Craft</h1>
<h3>Crée ton personnage pour le combat !</h3>

<form action="{{ route('personnages.store') }}" method="post">
    @csrf
   
    <input type="text" placeholder="Nom" name="Nom">
    @if($errors->has('Nom'))
    <p>{{$errors->first('Nom')}}</p>
    @endif
   
    <input type="text" placeholder="Description" name="Description">
    @if($errors->has('Description'))
    <p>{{$errors->first('Description')}}</p>
    @endif
 
    <input type="text" placeholder="Specialité" name="Specialite">
    @if($errors->has('Specialite'))
    <p>{{$errors->first('Specialite')}}</p>
    @endif

    <input type="submit" value="validez" name="validez">



</form>
@endsection