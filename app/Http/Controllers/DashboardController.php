<?php

namespace App\Http\Controllers ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DashboardController extends Controller 
{
 public function index()
  {
    if(Auth::user()->hasRole('admin'))
      {
        $users=DB::table('users')->get();
        $role_user=DB::table('role_user')->get();
        return view('dashboardadmin',['users'=>$users,'role_user'=> $role_user]);
      }
      //pour retourner dashboard de responsable (statistique ) qui contient les courbes des évaluation 
    elseif(Auth::user()->hasRole('responsable_de_recouvrement'))
      { // graphique de facturation (total de facturation par type de client)
        $result=DB::select(DB::raw("SELECT SUM(montant_total)as total,id_type from facturations WHERE periodefin BETWEEN '2018-01-01' and '2018-12-31' group BY id_type
        "));
        $chartData="";
        foreach($result as $list){
            $type_client=DB::table('type_client')->where('id','=',$list->id_type)->get();//on acceder a la table type de client pour retourner nom de client 
            foreach($type_client as $type);
            $chartData.="['".$type->type."', ".$list->total."],";
        }
        $arr['chartData']=rtrim($chartData,",");

        $facturation=DB::select(DB::raw("SELECT SUM(montant_total)as total,YEAR(periodefin) as annee from facturations group BY YEAR(periodefin)"));
        $creance=DB::select(DB::raw("SELECT SUM(montant)as total,anne_debut as annee from creances group BY anne_debut"));
        $chartSitu="";
        foreach($facturation as $list){
        foreach($creance as $crea)
           
         $chartSitu.="['".$list->annee."',".$list->total.", ".$crea->total."],";
       }
       $arr2['chartSitu']=rtrim($chartSitu,",");
       // présentation graphique de créance par district 
       $creancedistrict=DB::select(DB::raw("SELECT SUM(montant)as total,district from creances WHERE anne_debut=2018 group BY district"));
   
       $chartCreance="";
       foreach($creancedistrict as $item){
        $districts=DB::table('districts')->where('id','=',$item->district)->get();
          foreach($districts as $district)
         $chartCreance.="['".$district->nom_district."',".$item->total."],";
      }
       $arr3['chartCreance']=rtrim($chartCreance,",");
        return view('responsabledash',$arr,$arr2)->with($arr3);
      }
      //pour retourner dashboard de client qui contient liste des factures
    elseif(Auth::user()->hasRole('user'))
      {
        //pour mettre à jour l'attribut situation de la table facturation 
        $facturationsactu = DB::table('facturations')
                    ->where('reference','=', auth()->user()->reference )->get();
                    foreach($facturationsactu as $facturation)
                    $today = date("Y-m-d"); 
                    if($facturation->payeravl < $today AND $facturation->situation =='en cours'){ //si date de paiement a été dépassé et situation en cours on va mettre dans situation "impayée"
                      DB::table('facturations')
                        ->where('reference','=', auth()->user()->reference)
                        ->update([  'situation' => 'impayeé',]);
                    }

        $facturations = DB::table('facturations')
                    ->where('reference','=', auth()->user()->reference )// selectionner la facture de mem reference qui ajouter dans l'inscription afficher facture de client 
                    ->where('situation','=','en cours')
                    ->get(); 
        return view('dashboard',['facturations' => $facturations]);
      }
  }
  /*public function myprofile()
  {
    return view('myprofile');
  }
  public function creance(){
  
    return view('creance');
  }*/
}



