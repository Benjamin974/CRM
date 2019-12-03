<?php

namespace App\Http\Controllers;

use App\Adresses;
use App\Clients;
use App\Commentaires_clients;
use App\Contacts;
use App\Http\Resources\ClientsRessource;
use App\Projets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{

    function index()
    {
        $out = Clients::with([
            "adresse", "contacts", "projets", 
            "commentaires" => function($q) {
                $q->with('type'); 
            }
        ])->get();

        return ClientsRessource::collection($out);
    }



    function addClient(Request $request)
    {

        $validatedData = Validator::make(
            $request->all(),
            [
                'nomClient' => 'required|max:255',
                'nom' => 'required|max:255',
                'prenom' => 'required|max:255',
                'tel' => 'required',
                'email' => 'required',
                'poste' => 'required',
                'adresse' => 'required',
                'code_postal' => 'required',
                'ville' => 'required',
                'nomProjet' => 'required',
                'commentaire' => 'required',
                'type' => 'required'

            ],
            [
                'required' => 'L\'attribut :attribute est requis.',
            ]
        )->validate();

        $tabClient = [
            'nomClient' => $validatedData['nomClient']
        ];

        $tabContact = [
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'tel' => $validatedData['tel'],
            'email' => $validatedData['email'],
            'poste' => $validatedData['poste']
        ];

        $tabAdresse = [
            'adresse' => $validatedData['adresse'],
            'code_postal' => $validatedData['code_postal'],
            'ville' => $validatedData['ville']
        ];

        $tabProjet = [
            'nom' => $validatedData['nomProjet']
        ];


        DB::transaction(function () use ($tabAdresse, $tabClient, $tabContact, $tabProjet) {

            $adresse = Adresses::create($tabAdresse);
            $client = $adresse->client()->create($tabClient);
            $contact = $client->contacts()->create($tabContact);
            $projet = $client->projets()->create($tabProjet);
        });





        return json_encode($validatedData);
    }
}
