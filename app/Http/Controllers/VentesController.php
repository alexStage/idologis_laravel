<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Informations;
use App\Bien;

class VentesController extends Controller
{
    public function index(){
    	$infos = Informations::first();
    	$ventes = Bien::where('categorie_id', 1)->with('categorie', 'user', 'classe')->get();
    	return view('ventes',compact('ventes','infos'));
    }
    
    public function requeteAjax(Request $request){
        if($request->ajax()){
            $ventes = Bien::where('categorie_id', 2)->with('categorie', 'user', 'classe')->get();
            $json = json_encode($ventes);
            return response($json);
        }        
    }
}
