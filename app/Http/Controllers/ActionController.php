<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Dessinateur;


class ActionController extends Controller
{
    public function ajouterPersonnage(Request $request) {
        $personnage = new Personnage;
        $personnage->personnage_id = $request->personnage_id;
        $personnage->nom = $request->nom;
        $personnage->année_création = $request->année_création;
        $personnage->bd = $request->bd;
        $personnage->dessinateur = $request->dessinateur;
        $personnage->save();
        return redirect('/personnages');
    }

    public function ajouterDessinateur(Request $request) {
        $dessinateur = new Dessinateur;
        $dessinateur->dessinateur_id = $request->dessinateur_id;
        $dessinateur->nom = $request->nom;
        $dessinateur->année_naissance = $request->année_naissance;
        $dessinateur->nationalité = $request->nationalité;
        $dessinateur->save();
        return redirect('/dessinateurs');
    }
    
    public function supprimer(Request $request) {
        $personnage = Personnage::find($request->id);
        $personnage->delete();
        return redirect('/personnages');
    }

    public function modifierPersonnage(Request $request) {
        $personnage = new Personnage;
        $personnage->nom = $request->nom;
        $personnage->personnage_id = $request->personnage_id;
        $personnage->année_création = $request->année_création;
        $personnage->bd = $request->bd;
        $personnage->save();
        return redirect('/personnages');
    }

}