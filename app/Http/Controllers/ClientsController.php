<?php

namespace App\Http\Controllers;

use App\AdressesModel;
use App\ClientsModel;
use App\ContactsModel;
use App\Http\Resources\ClientsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $out = ClientsModel::with([
            'adresse', 'contacts'
        ])->get();

        return ClientsRessource::collection($out);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // AJOUTER TOUTES LES DONNÉES

        $array = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'poste' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'villes' => 'required',
            'nom_entreprise' => 'required',
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();


        $client = [
            'nom_entreprise' => $array['nom_entreprise'],
        ];
        $contact = [
            'nom' => $array['nom'],
            'prenom' => $array['prenom'],
            'tel' => $array['tel'],
            'email' => $array['email'],
            'post' => $array['poste'],
        ];

        $adresse = [
            'adresse' => $array['adresse'],
            'code_postal' => $array['code_postal'],
            'villes' => $array['villes'],
        ];

        $clientM = [];
        // Permet de faire un rollback et use permet d'utiliser des variables en externes de la fonction
        DB::transaction(function () use ($client, $contact, $adresse, &$clientM) {

            $adress = AdressesModel::create($adresse);
            $clientM = $adress->client()->create($client);
            $clientM->contacts()->create($contact);
        });

        $clientM =  ClientsModel::with([
            'adresse', 'contacts'
        ])
            ->where('id', $clientM->id)
            ->first();

        return new ClientsRessource($clientM);
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
