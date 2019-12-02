<?php

namespace App\Http\Controllers;

use App\Adresses;
use App\Clients;
use App\Contacts;
use App\Http\Resources\ClientsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{

    function index() {
        $out = Clients::with([
            "adresse", "contacts"
        ])->get();

        // return ClientsRessource::collection($out);
    }



    function addClient(Request $request) {

        $validatedData = Validator::make(
            $request->all(),
            [
                'nomClient' => 'required|max:255',
                'nom' => 'required|max:255',
                'prenom' => 'required|max:255',
                'tel' => 'required',
                'email' => 'required', 
                'poste' => 'required',
                'id_client' => 'required',
                'adresse' => 'required',
                'code_postal' => 'required',
                'ville' => 'required'
                
            ],
            [
                'required' => 'L\'attribut :attribute est requis.',
            ]
        )->validate();

        $out = Adresses::create(
            $validatedData->nomClient,
            $validatedData->adresse,
            $validatedData->code_postal,
            $validatedData->ville);

        return json_encode($validatedData);
    }
    
}
