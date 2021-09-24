@extends('layouts.base')
@section('css','ajouter')
@section('title', 'Ajouter un dessinateur')

@section('content')
<h1>Nouvel Artiste</h1>

<div>
    <form action="/ajouterDessinateur" method="post">
      @csrf
      <label for="name">Nom du nouveau dessinateur</label>
      <input type="text" name="name" placeholder="Le nom du dessinateur" value="test">
  
      <label for="annee">Année de naissance</label>
      <input type="text" name="annee" placeholder="Son année de naissance" value="2021">
  
      <label for="nationalité">Sa nationalité</label>
      <input type="text" name="nationalité" placeholder="Sa nationalité" value="test">
  
      <input type="submit" value="Ajouter">
    </form>
  </div>
  
@endsection