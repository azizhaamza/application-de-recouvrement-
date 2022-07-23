<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Facturation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FacturationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturations=DB::table('facturations')->get();
        return view ('facturations.index',['facturations'=>$facturations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // fonction pour envoyer a la page de création une facture
    public function create()
    {
        $districts=DB::table('districts')->get();
        $type_client=DB::table('type_client')->get();
        return view('facturations.create',['type_client'=>$type_client],['districts'=>$districts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // fonction pour ajouter une facture
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|string|max:10',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'consommation' => 'required|numeric',
            'nbmois' => 'required|int|max:2',
            'prix' => 'required|numeric',
            'totalservices' => 'required|numeric',
            'montant_a_deduire' => 'required|numeric',
            'montant_de_credit' => 'required|numeric',
            'redfix' => 'required|numeric',
            'tva' => 'required|numeric',
            'rtt' => 'required|numeric',
            'periodedebut' => 'required|date',
            'periodefin' => 'required|date',
            'payeravl' => 'required|date',
            'district' => 'required|int|max:50',
            'id_type' => 'required|int|max:8',  
        ]);
        DB::table('facturations')->insert(
            ['reference' => $request->reference,
             'nom' => $request->nom,
             'prenom' => $request->prenom,
             'adresse' => $request->adresse,
             'consommation' => $request->consommation,
             'nbmois' => $request->nbmois,
             'prix' => $request->prix,
             'montant'=>($request->prix)*($request->consommation),
             'redfix' => $request->redfix,
             'total'=>($request->redfix) + (($request->prix)*($request->consommation)),
             'tva' => $request->tva,
             'rtt' => $request->rtt,
             'totalservices'=>$request->totalservices ,
             'totaltaxe'=>$request->redfix + $request->rtt,
             'montant_a_deduire'=>$request->montant_a_deduire,
             'montant_de_credit'=>$request->montant_de_credit,
             'totalsolde'=> ($request->montant_de_credit)-($request->montant_a_deduire) ,
             'periodedebut' => $request->periodedebut,
             'periodefin' => $request->periodefin,
             'payeravl' => $request->payeravl,
             'district' => $request->district,
             'id_type' => $request->id_type,
             'montant_total'=> (($request->redfix) + (($request->prix)*($request->consommation)))+($request->totalservices)+($request->redfix + $request->rtt)+(($request->montant_de_credit)-($request->montant_a_deduire)),
             'situation'=> 'en cours',
             ]);

             return redirect()->route('facturation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Facturation $facturation)
    {
        return view('facturations.show',compact('facturation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facturation $facturation)
    {
        $districts=DB::table('districts')->get();
        $type_client=DB::table('type_client')->get();
        return view('facturations.edit',compact('facturation'),['type_client'=>$type_client,'districts'=>$districts]);

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
        $request->validate([
            'reference' => 'required|string|max:10',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'consommation' => 'required|numeric',
            'nbmois' => 'required|int|max:2',
            'prix' => 'required|numeric',
            'indexnouv' => 'required|numeric',
            'indexanci' => 'required|numeric',
            'redfix' => 'required|numeric',
            'tva' => 'required|numeric',
            'rtt' => 'required|numeric',
            'totalservices' => 'required|numeric',
            'montant_a_deduire' => 'required|numeric',
            'montant_de_credit' => 'required|numeric',
            'periodedebut' => 'required|date',
            'periodefin' => 'required|date',
            'payeravl' => 'required|date',
            'district' => 'required|int|max:50',
            'id_type' => 'required|int|max:8', 
            'situation'=> 'required|string|max:255',
        ]);
        DB::table('facturations')
                    ->where('id',$id)
                    ->update([  'reference' => $request->reference,
                                'nom' => $request->nom,
                                'prenom' => $request->prenom,
                                'adresse' => $request->adresse,
                                'consommation' => $request->consommation,
                                'nbmois' => $request->nbmois,
                                'prix' => $request->prix,
                                'indexnouv' => $request->indexnouv,
                                'indexanci' => $request->indexanci,
                                'montant'=>($request->prix)*($request->consommation),
                                'redfix' => $request->redfix,
                                'total'=>($request->redfix) + (($request->prix)*($request->consommation)),
                                'totalservices'=>$request->totalservices ,
                                'totaltaxe'=>$request->redfix + $request->rtt,
                                'montant_a_deduire'=>$request->montant_a_deduire,
                                'montant_de_credit'=>$request->montant_de_credit,
                                'totalsolde'=> ($request->montant_de_credit)-($request->montant_a_deduire) ,
                                'montant_total'=> (($request->redfix) + (($request->prix)*($request->consommation)))+($request->totalservices)+($request->redfix + $request->rtt)+(($request->montant_de_credit)-($request->montant_a_deduire)),
                                'tva' => $request->tva,
                                'rtt' => $request->rtt,
                                'periodedebut' => $request->periodedebut,
                                'periodefin' => $request->periodefin,
                                'payeravl' => $request->payeravl,
                                'district' => $request->district,
                                'id_type' => $request->id_type,
                                'situation'=> $request->situation,

                    ]);

                    return redirect()->route('facturation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facturation $facturation)
    {
        $facturation->delete();
        return redirect()->route('facturation.index');
    }
}
