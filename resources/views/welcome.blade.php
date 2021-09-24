@extends('layouts.base')

@section('title', 'Accueil')
@section('css','welcome')

@section('content')
<div class="background">
    <button><a href="/personnages">Découvrez des icônes de la BD</a></button>
    <button><a href="/dessinateurs">Découvrez des artistes</a></button>
</div>

@endsection