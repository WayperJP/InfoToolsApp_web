<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProduitController extends Controller
{
    public function index(): index
    {
        $produits =  DB::tables('produit')->get();

        return view('produit.index', ['produit' => $produits])
    }
}
