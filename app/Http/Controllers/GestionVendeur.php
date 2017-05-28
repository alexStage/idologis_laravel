<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class GestionVendeur extends Controller
{
    public function index(){
        $users = User::all();
        return view('vendeurs',compact('users'));
}
}
