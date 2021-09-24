@extends('layouts.base')
@section('css','ajouter')
@section('title', 'Modifier un personnage')

@section('content')
<h1>Modifier un personnage</h1>

<div class="content">
    <form action="/modifierPersonnage/{{$personnage->id}}" method="post">
      @csrf
      <label for="nom">Nom du personnage à modifier</label>
      <input type="text" id="nom" name="nom" placeholder="Le nom du personnage " value="{{$personnage->nom}}">
  
      <label for="année">Année de création à modifier</label>
      <input type="text" id="année" name="année" placeholder="Son année de création" value="{{$personnage->année_création}}">
  
      <label for="bd">Sa bd affiliée à modifier</label>
      <input type="text" name="bd" placeholder="Sa bd affiliée"value="{{$personnage->bd}}">

      <label for="dessinateur">Son dessinateur à modifier</label>
      <input type="text" name="bd" placeholder="Son dessinateur"value="{{$personnage->dessinateur->nom}}">
      
<input type="hidden" value="{{$personnage->id}}">
      <input type="submit" value="Valider">
    </form>
  </div>
  
@endsection