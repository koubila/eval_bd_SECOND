@extends('layouts.base')
@section('css','ajouter')
@section('title', 'Ajouter un personnage')

@section('content')
<h1>Nouveau personnage</h1>

<div class="content">
    <form action="/ajouterPersonnage" method="post">
      @csrf
      <label for="nom">Nom du nouveau personnage</label>
      <input type="text" id="nom" name="nom" placeholder="Le nom du personnage" value="test">
  
      <label for="année">Année de création</label>
      <input type="text" id="année" name="année" placeholder="Son année de création" value="2021">
  
      <label for="bd">Sa bd affiliée</label>
      <input type="text" name="bd" placeholder="Sa bd affiliée"value="test">

      <label for="dessinateur">Son dessinateur</label>
      <input type="text" name="bd" placeholder="Son dessinateur"value="test">
      

      <input type="submit" value="Ajouter">
    </form>
  </div>
  
@endsection