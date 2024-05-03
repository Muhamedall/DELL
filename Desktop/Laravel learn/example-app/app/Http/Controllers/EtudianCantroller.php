<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudianCantroller extends Controller
{
    public function index(){
        //methde 1
        $prenom ='Soukaina';
        $nome="el mosaddak";


        return view('homme' ,compact('nome' ,'prenom'));
    }
    public function affiche(){
        return view('contact');
    }
}
