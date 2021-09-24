@extends('layouts.base')

@section('title', 'Personnages')
@section('css','Personnages')

@section('content')
<h1>Personnages de BD</h1>

<div class="tableau">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Année de création</th>
                <th>Bande dessinée</th>
                <th>Son Dessinateur</th>
                <th>Ajouter</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($personnages[0]->dessinateur) --}}
            @foreach ($personnages as $personnage)
                <tr>
                    <td>{{ $personnage->nom }}</td>
                    <td>{{ $personnage->année_création }}</td>
                    <td>{{ $personnage->bd }}</td>
                    <td>{{ $personnage->dessinateur->nom }}</td>

                    <td>
                        <button class="ajout"><a href="/ajouterPersonnage">+</a></button>
                    </td>

                    <td>
                        <a class="modifier" href="/modifierPersonnage/{{ $personnage->id }}">m.à.j</a>
                    </td>

                    <td>
                        <form action="/supprimer" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $personnage->id }}">
                            <input type="submit" value="x">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection