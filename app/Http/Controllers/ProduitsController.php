<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index(){

        $mesproduits=produits::inRandomOrder()->whereActive(true)->take(10)->get();

        return view('produits.index',compact('mesproduits'));
    }
}
