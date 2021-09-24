@extends('layouts.base')

@section('title', 'Dessinateurs')
@section('css','Personnages')

@section('content')
<h1>Dessinateurs de BD</h1>

<div class="tableau">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Année de naissance</th>
                <th>Nationalité</th>
                <th>Ajouter</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dessinateurs as $dessinateur)
                <tr>
                    <td>{{ $dessinateur->nom }}</td>
                    <td>{{ $dessinateur->année_naissance }}</td>
                    <td>{{ $dessinateur->nationalité }}</td>
                    <td>
                        <button class="ajout"><a href="/ajouterDessinateur">+</a></button>
    
                    </td>
                    <td>
                        <a class="modifier" href="/modifier/{{ $dessinateur->id }}">m.à.j</a>
                    </td>
                    <td>
                        <form action="/supprimer" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $dessinateur->id }}">
                            <input type="submit" value="x">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection