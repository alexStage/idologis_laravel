<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bien;
use App\Informations;

class LocationsController extends Controller
{
    public function index(){
    	$infos = Informations::first();
    	$locations = Bien::where('categorie_id', 2)->with('categorie', 'user', 'classe')->get();
    	return view('locations',compact('locations','infos'));
    }
}
