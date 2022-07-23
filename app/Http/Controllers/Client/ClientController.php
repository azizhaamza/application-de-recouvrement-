<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Demande;
use Carbon\Carbon;
use Session;

class ClientController extends Controller
{
    //c'est meme fonction dans le dashboard controller 
  /*  public function factures_consulter($id)
    {
        
        $facturations = DB::table('facturations')
                    ->where('reference','=',$id)
                    ->where('situation','=','en cours')
                    ->get(); 
            return view('factures' ,['facturations' => $facturations]);
    }*/
    // fonction qui affiche facture de client
    public function facture($id)
    {
        
        $facturations = DB::table('facturations')
                    ->where('reference','=',$id)
                    ->get(); 
            return view('facture' ,['facturations' => $facturations]);
    }
    // lorsque on cliquer sur passer demande qui affiche la page de demande 
    public function demande($reference)
    {
        $facture = DB::table('facturations')
                    ->where('reference','=',$reference)
                    ->get();
        return view('passer_demande',['facture' => $facture]);
    }
    // ajouter la demande dans la table demandes pour consulter le responsable et le répondre
    public function demande_passer(Request $request){
        
        $demande = DB::table('demandes')->insert(
            ['reponse' => $request->input('reponse'),
            'reference' => $request->input('reference'),
            'montant_initial' => $request->input('montant'),
            'montant_a_payer' => $request->input('montant_payer'),
            'periodefin' => $request->input('periodefin'),
            'periodedebut' => $request->input('periodedebut'),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'nbmois' => $request->input('nbmois'),
            'date_de_passer_demande'=> Carbon::now()
            

             ]
        );
       
        Session::flash('success', 'votre demande à été passé'); 
        return redirect()->route('consulter');
    }
    // c'est pour acceder a la page consulter demande 
    public function consulter_demande(){
        $demande_consulter=DB::table('demandes')
                    ->get();
        return view('consulter',['demande_consulter'=> $demande_consulter]);
    }
    // c'est pour acceder a la page de paiement facture 
    public function paiement($ref,$mont){
        $montant=$mont;
        $reference=$ref;
        return view('paiement',['montant'=> $montant ,'reference'=> $reference]);

    }
    // c'est  lorsque le client cliquer sur payer et ajouter le payement dans le table paiement
    public function paiementPost(Request $request)
    {
                    DB::table('paiement')->insert(
                        ['reference' => $request->reference,
                        'montant' => $request->montant,
                        'date_de_paiement' => Carbon::now(),]);
                    DB::table('facturations')
                        ->where('reference',$request->reference)
                        ->update([  'situation' => 'payée',]);
            
                Session::flash('success', 'le paiement est effectué');
                
                return redirect()->route('dashboard');
        
            }
                
        
    
}
