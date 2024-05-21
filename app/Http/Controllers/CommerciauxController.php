<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CommerciauxController extends Controller
{
    public function index(): index
    {
        $commerciauxs =  DB::tables('commerciaux')->get();

        return view('produit.index', ['commerciaux' => $commerciauxs])
    }
}