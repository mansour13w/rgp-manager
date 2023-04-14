@extends('layout')

@section('contenu')
<h1>World of Craft</h1>
<h3>Connexion</h3>

<form action="/"  method="post">
    @csrf
   
    <input type="password" placeholder="mot de passe" name="mp">
 
   

   
    <input type="text" placeholder="email" name="email">
    
    
   
 
   


    <input type="submit" value="se connecter" name="validez">



</form>
@endsection
