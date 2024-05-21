<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// -----Table Produit-----
/*
{
    "nomProduit": "",
    "petiteDescriptionProduit": "",
    "longueDescriptionProduit": "",
    "prixProduit": "",
    "typeProduit": ""
}
*/

//Route pour récupérer tous les produits
Route::get('/produit', function () {
    $produits = DB::table('produit')->get();
    return response()->json($produits);
});

//Route pour récupérer un produit par son ID
Route::get('/produit/{id}', function ($id) {
    $produit = DB::table('produit')->where('numProduit', $id)->first();
    if ($produit) {
        return response()->json($produit);
    } else {
        return response()->json(['message' => 'Produit non trouvé'], 404);
    }
});

// Route pour ajouter un nouveau produit
Route::post('/produit', function (Request $request) {
    $data = $request->only(['nomProduit', 'petiteDescriptionProduit', 'longueDescriptionProduit', 'prixProduit','typeProduit']); 
    $newProduct = DB::table('produit')->insert($data);
    if ($newProduct) {
        return response()->json(['message' => 'Produit ajouté avec succès']);
    } else {
        return response()->json(['message' => 'Erreur lors de l\'ajout du produit'], 500);
    }
});



// Route pour supprimer un produit par son ID
Route::delete('/produit/{id}', function ($id) {
    $deleted = DB::table('produit')->where('numProduit', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Produit supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Produit non trouvé'], 404);
    }
});

// Route pour mettre à jour un produit par son ID
Route::put('/produit/{id}', function ($id, Request $request) {
    $data = $request->only(['nomProduit', 'petiteDescriptionProduit', 'longueDescriptionProduit', 'prixProduit','typeProduit']); 
    $updated = DB::table('produit')->where('numProduit', $id)->update($data);
    if ($updated) {
        return response()->json(['message' => 'Produit mis à jour avec succès']);
    } else {
        return response()->json(['message' => 'Produit non trouvé'], 404);
    }
});

// -----Table Client-----
/*
{
    "nomClient": "",
    "prenomClient": "",
    "adresseClient": "",
    "villeClient": "",
    "cpClient": "",
    "mailClient": "",
    "telClient": "",
    "numSirenEntreprise": ""
}
*/

//Route pour récupérer tous les clients
Route::get('/client', function () {
    $clients = DB::table('client')->get();
    return response()->json($clients);
});

//Route pour récupérer un client par son ID
Route::get('/client/{id}', function ($id) {
    $client = DB::table('client')->where('numClient', $id)->first();
    if ($client) {
        return response()->json($client);
    } else {
        return response()->json(['message' => 'Client non trouvé'], 404);
    }
});

// Route pour ajouter un nouveau client
Route::post('/client', function (Request $request) {
    $data = $request->only(['nomClient', 'prenomClient', 'adresseClient', 'villeClient','cpClient','mailClient','telClient','numSirenEntreprise']); 
    $newProduct = DB::table('client')->insert($data);
    if ($newProduct) {
        return response()->json(['message' => 'Client ajouté avec succès']);
    } else {
        return response()->json(['message' => 'Erreur lors de l\'ajout du client'], 500);
    }
});


// Route pour supprimer un client par son ID
Route::delete('/client/{id}', function ($id) {
    $deleted = DB::table('client')->where('numClient', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Client supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Client non trouvé'], 404);
    }
});

// Route pour mettre à jour un client par son ID
Route::put('/client/{id}', function ($id, Request $request) {
    $data = $request->only(['nomClient', 'prenomClient', 'adresseClient', 'villeClient','cpClient','mailClient','telClient','numSirenEntreprise']); 
    $updated = DB::table('client')->where('numClient', $id)->update($data);
    if ($updated) {
        return response()->json(['message' => 'Client mis à jour avec succès']);
    } else {
        return response()->json(['message' => 'Client non trouvé'], 404);
    }
});

// -----Table Commerciaux-----
/*
{
    "nomCommerciaux": "",
    "prenomCommerciaux": "",
    "adresseCommerciaux": "",
    "villeCommerciaux": "",
    "cpCommerciaux": "",
    "mailCommerciaux": "",
    "telCommerciaux": "",
    "numPassword": ""
}
*/

//Route pour récupérer tous les commerciaux
Route::get('/commerciaux', function () {
    $commerciauxs = DB::table('commerciaux')->get();
    return response()->json($commerciauxs);
});

//Route pour récupérer un commercial par son ID
Route::get('/commerciaux/{id}', function ($id) {
    $commercial = DB::table('commerciaux')->where('numCommerciaux', $id)->first();
    if ($commercial) {
        return response()->json($commercial);
    } else {
        return response()->json(['message' => 'Commercial non trouvé'], 404);
    }
});

// Route pour ajouter un nouveau Commercial
Route::post('/commerciaux', function (Request $request) {
    $data = $request->only(['nomCommerciaux', 'prenomCommerciaux', 'adresseCommerciaux', 'villeCommerciaux','cpCommerciaux','mailCommerciaux','telCommerciaux','numPassword']); 
    $newProduct = DB::table('commerciaux')->insert($data);
    if ($newProduct) {
        return response()->json(['message' => 'Commercial ajouté avec succès']);
    } else {
        return response()->json(['message' => 'Erreur lors de l\'ajout du commercial'], 500);
    }
});


// Route pour supprimer un commercial par son ID
Route::delete('/commerciaux/{id}', function ($id) {
    $deleted = DB::table('commerciaux')->where('numCommerciaux', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Commercial supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Commercial non trouvé'], 404);
    }
});

// Route pour mettre à jour un client par son ID
Route::put('/commerciaux/{id}', function ($id, Request $request) {
    $data = $request->only(['nomCommerciaux', 'prenomCommerciaux', 'adresseCommerciaux', 'villeCommerciaux','cpCommerciaux','mailCommerciaux','telCommerciaux','numPassword']); 
    $updated = DB::table('commerciaux')->where('numCommerciaux', $id)->update($data);
    if ($updated) {
        return response()->json(['message' => 'Commercial mis à jour avec succès']);
    } else {
        return response()->json(['message' => 'Commercial non trouvé'], 404);
    }
});

// -----Table rendezvous-----
/*
{
    "nomRendezVous": "",
    "prenomRendezVous": "",
    "mailRendezVous": "",
    "telRendezVous": "",
    "numSirenRendezVous": "",
    "nomSocieteRendezVous": "",
    "villeRendezVous": "",
    "cpRendezVous": "",
    "adresseRendezVous": "",
    "dateRendezVous": "",
    "heureDebutRendezVous": "",
    "heureFinRendezVous": "",
    "butRendezVous": "",
    "descriptionRendezVous": "",
    "confirmationRendezVous": ""
    
}
*/

//Route pour récupérer tous les rendez-vous
Route::get('/rendezvous', function () {
    $rendezvous = DB::table('rendezvous')->get();
    return response()->json($rendezvous);
});

//Route pour récupérer un rendez-vous par son ID
Route::get('/rendezvous/{id}', function ($id) {
    $rdv = DB::table('rendezvous')->where('numRendezVous', $id)->first();
    if ($rdv) {
        return response()->json($rdv);
    } else {
        return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
    }
});

// Route pour ajouter un nouveau rendez-vous
Route::post('/rendezvous', function (Request $request) {
    $data = $request->only(['nomRendezVous', 'prenomRendezVous', 'mailRendezVous', 'telRendezVous','numSirenRendezVous','nomSocieteRendezVous','villeRendezVous','cpRendezVous','adresseRendezVous','dateRendezVous','heureDebutRendezVous','heureFinRendezVous','butRendezVous','descriptionRendezVous','confirmationRendezVous']); 
    $newProduct = DB::table('rendezvous')->insert($data);
    if ($newProduct) {
        return response()->json(['message' => 'Rendez-vous ajouté avec succès']);
    } else {
        return response()->json(['message' => 'Erreur lors de l\'ajout du rendez-vous'], 500);
    }
});


// Route pour supprimer un commercial par son ID
Route::delete('/rendezvous/{id}', function ($id) {
    $deleted = DB::table('rendezvous')->where('numRendezVous', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Rendez-vous supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
    }
});

// Route pour mettre à jour un rendez-vous par son ID
Route::put('/rendezvous/{id}', function ($id, Request $request) {
    $data = $request->only(['nomRendezVous', 'prenomRendezVous', 'mailRendezVous', 'telRendezVous','numSirenRendezVous','nomSocieteRendezVous','villeRendezVous','cpRendezVous','adresseRendezVous','dateRendezVous','heureDebutRendezVous','heureFinRendezVous','butRendezVous','descriptionRendezVous','confirmationRendezVous']);
    $updated = DB::table('rendezvous')->where('numRendezVous', $id)->update($data);
    if ($updated) {
        return response()->json(['message' => 'Rendez-vous mis à jour avec succès']);
    } else {
        return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
    }
});

// -----Table Identification-----
/*
{
    "numPassword": "",
    "password": ""
}
*/

//Route pour récupérer tous les commerciaux
Route::get('/identification', function () {
    $identification = DB::table('identification')->get();
    return response()->json($identification);
});

//Route pour récupérer un commercial par son ID
Route::get('/identification/{id}', function ($id) {
    $mdp = DB::table('identification')->where('numPassword', $id)->first();
    if ($mdp) {
        return response()->json($mdp);
    } else {
        return response()->json(['message' => 'Mot de passe non trouvé'], 404);
    }
});

// Route pour ajouter un nouveau Commercial
Route::post('/identification', function (Request $request) {
    $data = $request->only(['password']); 
    $newProduct = DB::table('identification')->insert($data);
    if ($newProduct) {
        return response()->json(['message' => 'Mot de passe ajouté avec succès']);
    } else {
        return response()->json(['message' => 'Erreur lors de l\'ajout du commercial'], 500);
    }
});


// Route pour supprimer un commercial par son ID
Route::delete('/identification/{id}', function ($id) {
    $deleted = DB::table('identification')->where('numPassword', $id)->delete();
    if ($deleted) {
        return response()->json(['message' => 'Mot de passe supprimé avec succès']);
    } else {
        return response()->json(['message' => 'Mot de passe non trouvé'], 404);
    }
});

// Route pour mettre à jour un client par son ID
Route::put('/identification/{id}', function ($id, Request $request) {
    $data = $request->only(['password']); 
    $updated = DB::table('identification')->where('numPassword', $id)->update($data);
    if ($updated) {
        return response()->json(['message' => 'Mot de passe mis à jour avec succès']);
    } else {
        return response()->json(['message' => 'Mot de passe non trouvé'], 404);
    }
});