@extends('layout')

@section('contenu')
<h1>World of Craft</h1>
<h3>Inscription</h3>

<form action="/inscription"  method="post">
    @csrf
   
    <input type="text" placeholder="mot de passe" name="mp">
 
   

   
    <input type="text" placeholder="email" name="email">
    
    
   
 
   


    <input type="submit" value="validez" name="validez">



</form>
@endsection
