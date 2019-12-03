<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Projets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjetsController extends Controller
{
    function addProjets(Request $request)
    {

        $validatedData = Validator::make(
            $request->all(),
            [
                'nomProjet' => 'required'
            ],
            [
                'required' => 'L\'attribut :attribute est requis.',
            ]
        )->validate();

        $tabProjet = [
            'nom' => $validatedData['nomProjet']
        ];
        

    }
}
