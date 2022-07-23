<?php
   
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;
   
class DemandePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function stripe_demande($ref,$mont)
    {
        $montant=$mont;
        $reference=$ref;

        return view('paiement_demande',['montant'=> $montant ,'reference'=> $reference]);
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    //pour payer demande d'echlonnement
    public function stripePost_demande(Request $request)
    {
        $reference=$request->get('reference');
        $mont=$request->get('montant');
        $query=DB::table('facturations')
        ->where('reference', $reference)
        ->get();
        foreach($query as $quer){
        $montant_rester=$quer->montant - $mont;}
        $montant=DB::table('facturations')
        ->where('reference', $reference)
        ->update(['montant' =>$montant_rester]);
      
        Session::flash('success', 'Payment successful!');
          
        return redirect()->route('consulter');

    }
}