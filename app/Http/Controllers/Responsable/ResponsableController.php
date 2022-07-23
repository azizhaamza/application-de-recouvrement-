<?php

namespace App\Http\Controllers\Responsable;
use App\Models\Creance ;
use App\Models\facturation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;
use App\Models\Objectif;
class ResponsableController extends Controller
{   
    
    
    use HasFactory;
    //lorsque le responsable cliquer sur créance pour consulter les créance mensuelles
    //la fonction creance pour retourner les créance mensuelle de l'annee qui choisi le responsable
    public function creance(){
        
        $facturations = DB::table('facturations')->get();   // lorsque le responsable cliquer sur rubrique créance pour afficher les créances des clients
                                                            // dont ce moment yssir actualisation ll view de créance a partir de la table de facturation 
        foreach($facturations as $facturation){             //si il y a une facture impayeé (cad qui dépasse les délai de payement)il ajouter a la table créance 
            if($facturation->situation == 'impayeé'){
                $date = date_parse($facturation->payeravl); // la methode parse permet d'extraire une date cad la date(payeravl) récupére de la table facturation 
                $jour = $date['day'];                       //il va l'extraire en jour et mois et anneé pour ajouter dans la table créance 
                $mois = $date['month'];
                $annee = $date['year'];

                DB::table('creances')->insert(              // aprés il va insérer les donnes de cette facture dans les attributes de la table créance
                    ['reference' => $facturation->reference,
                     'montant'=>$facturation->montant,
                     'anne_debut'=>$annee,
                     'mois_debut'=>$mois,
                     'jour_debut'=>$jour,
                     'district' => $facturation->district,
                     'id_type' => $facturation->id_type,
                     'adresse'=>$facturation->adresse,
                     'nom'=>$facturation->nom,
                     'prenom'=>$facturation->prenom,
                     'nbmois'=>$facturation->nbmois
                     ]);
                     DB::table('facturations')
                     ->where('id',$facturation->id)->delete();// si l'ajout est terminer cette facture supprimer de la table facturation puisque il devenu une créance 
                     
            }
        }
        $creances = DB::table('creances')           // on doit récuperer les donnes de la table créance pour l'annee 2018 
                    ->where('anne_debut','=',2018)
                    ->get();
                    // pour le tableaux de creance mensuelle par cartégorie de client
                    $creancejanvier=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=1 group BY id_type
                    ")); 
                    $creancefevrier=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=2 group BY id_type
                    "));
                     $creanceMars=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=3 group BY id_type
                    "));
                     $creanceavril=DB::select(DB::raw("SELECT SUM(montant)as total  from creances WHERE anne_debut=2018 AND mois_debut=4 group BY id_type
                    "));
                    
                     $creancemay=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=5 group BY id_type
                    "));
                     $creancejuin=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=6 group BY id_type
                    "));
                     $creancejuillet=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=7 group BY id_type
                    "));
                     $creanceaout=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=8 group BY id_type
                    ")); 
                    $creanceseptembre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=9 group BY id_type
                    "));
                     $creanceoctobre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=10 group BY id_type
                    ")); 
                    $creancenovomber=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=11 group BY id_type
                    "));
                     $creancedecembre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 AND mois_debut=12 group BY id_type
                    ")); 
                    
                    //création de graphique
                    $creancemensuelle=DB::select(DB::raw("SELECT SUM(montant)as total,mois_debut as mois from creances WHERE anne_debut=2018 group BY mois_debut
                    "));//récuper créance pour créer le graphique de créance mensuelle 
   
                    $chartCreance="";
                    foreach($creancemensuelle as $item){
                    $chartCreance.="['".$item->mois."',".$item->total."],";
                               }
                    $arr3['chartCreance']=rtrim($chartCreance,",");
        
            

        return view('creance' ,$arr3,['creances' => $creances, 'creancejanvier'=> $creancejanvier, 'creancefevrier'=> $creancefevrier , 'creanceMars'=> $creanceMars, 'creanceavril'=> $creanceavril, 'creancemay'=> $creancemay, 'creancejuin'=> $creancejuin, 'creancejuillet'=> $creancejuillet, 'creanceaout'=> $creanceaout, 'creanceseptembre'=> $creanceseptembre, 'creanceoctober'=> $creanceoctobre,'creancenovomber'=> $creancenovomber,'creancedecembre'=> $creancedecembre ]);
    }
       
       public function search(Request $request) // fonction de recherche ce qui permet de retourner les créance de l'anneé qui va entre l'utilisateur
      
        {
            $search= $request->get('search');
            $creances = DB::table('creances')
                    ->where('anne_debut','=',$search)
                    ->get(); 
            //pour completer le tableaux de creance suite à la recherche
            $creancejanvier=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=1 group BY id_type
            ")); 
            $creancefevrier=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=2 group BY id_type
            "));
             $creanceMars=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=3 group BY id_type
            "));
             $creanceavril=DB::select(DB::raw("SELECT SUM(montant)as total  from creances WHERE anne_debut=$search AND mois_debut=4 group BY id_type
            "));
            
             $creancemay=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=5 group BY id_type
            "));
             $creancejuin=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=6 group BY id_type
            "));
             $creancejuillet=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=7 group BY id_type
            "));
             $creanceaout=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=8 group BY id_type
            ")); 
            $creanceseptembre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=9 group BY id_type
            "));
             $creanceoctobre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=10 group BY id_type
            ")); 
            $creancenovomber=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=11 group BY id_type
            "));
             $creancedecembre=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=$search AND mois_debut=12 group BY id_type
            ")); 
            //création de graphique
            $creancemensuelle=DB::select(DB::raw("SELECT SUM(montant)as total,mois_debut as mois from creances WHERE anne_debut=$search group BY mois_debut
            "));//récuper créance pour créer le graphique de créance mensuelle 

            $chartCreance="";
            foreach($creancemensuelle as $item){
            $chartCreance.="['".$item->mois."',".$item->total."],";
                       }
            $arr3['chartCreance']=rtrim($chartCreance,",");

        
            return view('creance' ,$arr3,['creances' => $creances, 'creancejanvier'=> $creancejanvier, 'creancefevrier'=> $creancefevrier , 'creanceMars'=> $creanceMars, 'creanceavril'=> $creanceavril, 'creancemay'=> $creancemay, 'creancejuin'=> $creancejuin, 'creancejuillet'=> $creancejuillet, 'creanceaout'=> $creanceaout, 'creanceseptembre'=> $creanceseptembre, 'creanceoctober'=> $creanceoctobre,'creancenovomber'=> $creancenovomber,'creancedecembre'=> $creancedecembre ]);
        }

    public function creanceParDistrict()        //fonction qui retourner les créance pour afficher dans le view de creance par district
    {
        $annee=2018;
        $creances = DB::table('creances')
                    ->where('anne_debut','=',$annee)
                    ->get(); 
        $creancedistrict=DB::select(DB::raw("SELECT SUM(montant)as total,district from creances WHERE anne_debut=2018 group BY district"));
        //pour creer le graphique de créance par district
        $chartCreance="";
        foreach($creancedistrict as $item){
        $districts=DB::table('districts')->where('id','=',$item->district)->get();// 5atr fi table créance l'attribut district est contient des numero de district puisque on a table district  
        foreach($districts as $district)                                          // et nous besoin de recupere les nom de district donc on sélectionner district qui un id = l'attribut district de table créance
        $chartCreance.="['".$district->nom_district."',".$item->total."],";
                   }
        $arr3['chartCreance']=rtrim($chartCreance,",");


        return view('creanceParDistrict',$arr3,['annee'=>$annee,'creances' => $creances]);

    }
    public function recherche(Request $request)   //fonction recherche pour retourner les créances de l'anne et mois qui saisi le responsable dans le view créance par distrit
      
        {
            
            $annee= $request->get('anne');
            $creances = DB::table('creances')
                    ->where('anne_debut','=',$annee)
                    ->get(); 
            //pour creer le graphique de créance par district
        $creancedistrict=DB::select(DB::raw("SELECT SUM(montant)as total,district from creances WHERE anne_debut=$annee group BY district"));
        $chartCreance="";
        foreach($creancedistrict as $item){
        $districts=DB::table('districts')->where('id','=',$item->district)->get();// 5atr fi table créance l'attribut district est contient des numero de district puisque on a table district  
        foreach($districts as $district)                                          // et nous besoin de recupere les nom de district donc on sélectionner district qui un id = l'attribut district de table créance
        $chartCreance.="['".$district->nom_district."',".$item->total."],";
                   }
        $arr3['chartCreance']=rtrim($chartCreance,",");
        
        return view('creanceParDistrict',$arr3,['annee'=>$annee,'creances' => $creances]);
        }

    public function facturation()           // cette fonction permet de retourner les donnes a partir de la table facturation
    {   
        $annee=2018;
        $mois=3;
        $facturations = DB::table('facturations')               // on doit recupere les factures qui on l'annee 2018 et mois 3 pour afficher dans le table 
                            ->whereYear('periodefin','=',$annee)    // facturation
                            ->whereMonth('periodefin','=',$mois)->get();
        $result=DB::select(DB::raw("SELECT SUM(montant_total)as total,id_type from facturations WHERE periodefin BETWEEN '2018-01-1' and '2018-12-31' group BY id_type
        "));                // cette requet pour creer le graphique de facturation par type de client
        $chartData="";
        foreach($result as $list){
        $type_client=DB::table('type_client')->where('id','=',$list->id_type)->get();
        foreach($type_client as $type);
        $chartData.="['".$type->type."', ".$list->total."],";
        }
        $arr['chartData']=rtrim($chartData,",");

        return view('facturation',['facturations' => $facturations,'annee'=>$annee,'mois'=>$mois])->with($arr);

    }
    public function facturation_recherche(Request $request)   // c'est pour recuper les donnes de la facturation selon les recherche saisi par le responsable
    {
            $annee= $request->get('anne');
            $mois= $request->get('mois');
            $facturations = DB::table('facturations')
                                ->whereYear('periodefin','=',$annee)
                                ->whereMonth('periodefin','=',$mois)->get();
            // ici c'est le requet pour créé le graphique de facturation par type de client
            $result=DB::select(DB::raw("SELECT SUM(montant_total)as total,id_type from facturations WHERE periodefin BETWEEN '2018-01-01' and '2018-12-31' group BY id_type
            "));                                    
        $chartData="";
            foreach($result as $list){
            $type_client=DB::table('type_client')->where('id','=',$list->id_type)->get();
            foreach($type_client as $type);
            $chartData.="['".$type->type."', ".$list->total."],";
                                }
            $arr['chartData']=rtrim($chartData,","); 

            return view('facturation' ,$arr,['facturations' => $facturations,'annee'=>$annee,'mois'=> $mois]);
    }

    //cettte fonction peremt de faire le rapport entre la facturation et créance pour voir la situation de recouvrement
    public function taux()
    {
            
        $facturations = DB::table('facturations')           // récupere les donnes a partir de la table facturation
                    ->whereYear('periodefin','=',2018)      //
                    ->get();            
        // c'pour le total de facturation
        $facturat=DB::select(DB::raw("SELECT SUM(montant_total)as total  from facturations WHERE YEAR(periodefin)=2018 group BY MONTH(periodefin)"));
        // c'est pour le courbe d'evalution entre le créance et facturation
        $facturation=DB::select(DB::raw("SELECT SUM(montant_total)as total,MONTH(periodefin) as annee from facturations group BY MONTH(periodefin)"));
        $creance=DB::select(DB::raw("SELECT SUM(montant)as total,anne_debut as annee from creances group BY mois_debut"));
        $chartSitu="";
        foreach($facturation as $list){
        foreach($creance as $crea);
           
         $chartSitu.="['".$list->annee."',".$list->total.", ".$crea->total."],";
        }
         $arr['chartSitu']=rtrim($chartSitu,","); 
            
                
            // c'est pour le total de créance 
            $creances=DB::select(DB::raw("SELECT SUM(montant)as total from creances WHERE anne_debut=2018 group BY mois_debut"));
            //récupere les donnes a partir de la table créance
            $totcreance=DB::table('creances')
                    ->where('anne_debut','=',2018)
                    ->get();
            return view('situation_de_recouvrement',['totcreance'=>$totcreance,'facturat'=>$facturat,'facturations' => $facturations,'creances' => $creances])->with($arr);
    }

    // retourne view statistique qui contient toute les graphique (créance , facturation, situation de recouvrement)
    public function statistique()
    {
        return view('statistique');

    }
    // c'est pour afficher les demandes d'echlonnement qui sont passé par le client 
    public function demande(){
        $demandes=DB::table('demandes')->get();
        return view('responsable_demande',['demandes'=>$demandes]);
    }
    // c'et pour traiter les demandes lorsque le responsable accepter la demande 
    public function demande_traitement($id){
        $affected = DB::table('demandes')
              ->where('reference', $id)
              ->update(['reponse' => 'Accepter',
                        'date_de_reponse'=>Carbon::now()
            ]);
              Session::flash('success', 'Demande accépter');  
              return back();

        
        
    }
    // ici lorsque le responsable refuser la demande 
    public function demande_traitement2($id){
        $affected = DB::table('demandes')
              ->where('reference', $id)
              ->update(['reponse' => 'refuser']);
        
              Session::flash('erroer', 'Demande réfuser');  
              return back();
    }
    // c'est pour retourner la view objectif lorsque le responsable cliquer sur objectif
    public function objectif(){
        $districts=DB::table('districts')->get(); // c'est pour la liste deroulante de district dans la view objectif
              return view('objectif',['districts'=> $districts]);
    }
    // cette fonction pour envoyer a la base de données l'objectif fixer par le responsable
    public function objectif_post(Request $request){
        $request->validate([
            'pourcentage' => 'required|int|max:100|min:1',
            'annee' => 'required|int']);
            $districts=DB::table('districts')->where('id','=',$request->district)->get();      //c'est pour recupere les donne de district qui 
           foreach( $districts as $district);                                   //le responsable choisi pour fixer un objectif

            DB::table('objectifs')->insert(                         // insertion de l'objectif dans le table objectifs 
                ['district_nom'=> $district->nom_district,          //          
                'district_id'=> $request->district,
                'pourcentage' => $request->pourcentage,
                'annee' =>$request->annee ]);

            return redirect()->route('objectif');
        
    

    }   
    // cette fonction permet de retourner view ecart
    public function ecart(){
        $district=7;                    // c'est pour les donnes initiale pour afficher l'interface de ecart
        $annee=2018;
        $districts=DB::table('districts')->get();   // pour la liste deroulante de la page ecart 
        // total de facturation pour l'anne initiale et district initiale
        $facturations=DB::table('facturations')->whereYear('periodefin','=',$annee)->where('district','=',$district)->sum('montant_total');
        $creances=DB::table('creances')->where('anne_debut','=',$annee)->where('district','=',$district)->sum('montant');
        $taux=($creances)/($facturations)*100 ; // pourcentage de créance par rapport facturation 
        $objectifs=DB::table('objectifs')->where('annee','=',$annee)->where('district_id','=',$district)->get(); // recupere l'objectif (pourcentage de 
       foreach($objectifs as $objectif);                                    // créance par rapport facturation fixé le responsable pour le district)
       $pourcent=$objectif->pourcentage;                            // selectionner pourcentage de l'objectif
       $ecart=$pourcent-$taux;

        

        return view('ecart',['districts'=>$districts,'district'=>$district,'annee'=>$annee,'facturations'=>$facturations,'creances'=>$creances,'taux'=>$taux,'ecart'=>$ecart,'pourcent'=>$pourcent,'objectifs'=> $objectifs]);
    }
    // c'est pour recherche l'ecart entre la réalisation et objectif 
    public function recherche_ecart(Request $request){

        $district=$request->get('district'); // recupere le district choisi par le responsable
        $annee=$request->get('annee');         // recuperer l'annee choisi le responsable
        $districts=DB::table('districts')->get();
        $facturations=DB::table('facturations')->whereYear('periodefin','=',$annee)->where('district','=',$district)->sum('montant_total');
        $creances=DB::table('creances')->where('anne_debut','=',$annee)->where('district','=',$district)->sum('montant');
        $taux=($creances)/($facturations)*100; // pourcentage de créance par rapport facturation 
        $objectifs=DB::table('objectifs')->where('annee','=',$annee)->where('district_id','=',$district)->get(); // recupere l'objectif (pourcentage de
       foreach($objectifs as $objectif);                                // créance par rapport facturation fixé le responsable pour le district)
       $pourcent=$objectif->pourcentage;                                // selectionner pourcentage de l'objectif
       $ecart=$pourcent-$taux;                                          
       return view('ecart',['districts'=>$districts,'district'=>$district,'annee'=>$annee,'facturations'=>$facturations,'creances'=>$creances,'taux'=>$taux,'ecart'=>$ecart,'pourcent'=>$pourcent,'objectifs'=> $objectifs]);

    }

}
