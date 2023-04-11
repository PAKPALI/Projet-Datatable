<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class VueJsController extends Controller
{
    public function Vuejs(){
        // $client = Clients::all();
        return inertia('test');
    }

    public function NiveauIndex(){
        // $client = Clients::all();
        return inertia('niveauscolaire/index');
    }

    public function EtudiantIndex(){
        // $client = Clients::all();
        return inertia('Etudiant/index');
    }

    public function EtudiantCreate(){
        // $client = Clients::all();
        return inertia('Etudiant/create');
    }
}
