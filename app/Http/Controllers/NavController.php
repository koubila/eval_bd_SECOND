<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Dessinateur;

class NavController extends Controller
{
    
    public function listPersonnages() {
        $personnages = Personnage::all();
        return view('personnages', ['personnages' => $personnages]);
    }
    public function listDessinateurs() {
        $dessinateurs = Dessinateur::all();
        return view('dessinateurs', ['dessinateurs' => $dessinateurs]);
    }
    public function ajouterPersonnage() {
        $personnages = Personnage::all();
        return view('ajouterPersonnage', ['personnages' => $personnages]);
    }
    public function ajouterDessinateur() {
        $dessinateurs = Dessinateur::all();
        return view('ajouterDessinateur', ['dessinateurs' => $dessinateurs]);
    }

    public function modifierPersonnage($id) {
        $personnage = Personnage::findOrFail($id);
        $dessinateurs = Dessinateur::all()->sortBy('nom');
        return view('modifierPersonnage', ['personnage' => $personnage,'dessinateurs'=>$dessinateurs]);
    }

}