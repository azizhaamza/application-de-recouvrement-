@extends('layoutsresponsable.app', ['activePage' => 'facturation', 'title' => 'FACTURATION',  'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Facturation</h4>
                                <p class="card-category"> Année : {{ $annee }}</p>
                                <p class="card-category"> Mois :  {{ $mois }}</p>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <form action="/recherche" method="get" >
                                    <div>
                                        
                                        <input type="search" name="anne" class="mt-1" placeholder="Année ex:2016  " />
                                        <input type="search" name="mois" class="mt-1" placeholder="Mois ex : 7" />
                                        <span>
                                            <button id_type="submit" class="ml-3 btn-dark">Recherche</button>
                                        </span> 
                                    </div>    
                                </form>
                            </div>
                            <div class="card-body table-full-width">
                                <table class="table table-hover table-striped">
                                     <thead>
                                        <tr>
                                            <th >Region</th>
                                            <th >District</th>
                                            <th >Ordinaire</th>
                                            <th >Industrielles</th>
                                            <th >Contentieux</th>
                                            <th >Rejets Bancaires et postaux</th>
                                            <th >Societes National et Offices</th>
                                            <th >ADM</th>
                                            <th >Collectivites Publiques</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody> 
                                            
                                            <tr>
                                                <th rowspan="9">Tunis</th>
                                            </tr>
                                                    <tr>
                                                        <td> Tunis Ville</td> 
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',1)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',1)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Ariana</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',2)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',2)->sum('montant_total')}}</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Ezzahra</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',3)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',3)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Mourouj</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',4)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',4)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Manouba</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',5)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',5)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>El Menzah</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',6)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',6)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Kram</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',7)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',7)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Bardo</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',8)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',8)->sum('montant_total')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="7">Nord</th>
                                            </tr>
                                                    <tr>
                                                        <td> Menzel Bourguiba</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',9)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',9)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Zaghouan</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',10)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',10)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Bizerte</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',11)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',11)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td> Nabeul</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',12)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',12)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Menzel B-zelfa</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',13)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',13)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Menzel Temime</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',14)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',14)->sum('montant_total')}}</th> 
                                                    </tr>
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Nord Ouest</th>
                                            </tr>
                                                    <tr>
                                                        <td> Tabarka</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',15)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',15)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Siliana</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',16)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',16)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Beja</td> 
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',17)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',17)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jendouba</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',18)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',18)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kef</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',19)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',19)->sum('montant_total')}}</th> 
                                                    </tr>
                                            </tr>
                                            <tr>
                                                <th rowspan="9">Center</th>
                                            </tr>
                                                    <tr>
                                                        <td>El jem</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',20)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',20)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kairouan Nord</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',21)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',21)->sum('montant_total')}}</th> 
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Sousse Nord</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',22)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',22)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Monastir</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',23)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',23)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Mahdia</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',24)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',24)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sousse</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',25)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',25)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Moknine</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',26)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',26)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Kairouan</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',27)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',27)->sum('montant_total')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Sud Ouest</th>
                                            </tr>
                                                    <tr>
                                                        <td>Metlaoui</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',28)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',28)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kasserine</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',29)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',29)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sidi Bouzid</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',30)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',30)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Gafsa</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',31)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',31)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tozeur</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',32)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',32)->sum('montant_total')}}</th>
                                                    </tr>
                                                    
                                            </tr>
                                            <tr>
                                                <th rowspan="8">Sud</th>

                                            </tr>
                                                    <tr>
                                                        <td>Ben Guerdene</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',33)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',33)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kebili</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',34)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',34)->sum('montant_total')}}</th> 
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tatouine</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',35)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',35)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Mednine</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',36)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',36)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Gabes</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',37)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',37)->sum('montant_total')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Zarzis</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',38)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',38)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jerba</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',39)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',39)->sum('montant_total')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Sfax</th>
                                            </tr>
                                                    <tr>
                                                        <td>Jebniana</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',40)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',40)->sum('montant_total')}}</th>
                                                    </tr>
                                
                                                    <tr>
                                                        <td>Mahres</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',41)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',41)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Nord</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',42)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',42)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Sud</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',43)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',43)->sum('montant_total')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Ville</td>
                                                        <th>{{ $facturations->where('id_type','=',1)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',2)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',3)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',4)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',5)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',6)->where('district','=',44)->sum('montant_total')}}</th>
                                                        <th>{{ $facturations->where('id_type','=',7)->where('district','=',44)->sum('montant_total')}}</th>
                                                    </tr>
                                                    
                                            </tr>
                
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                
                            
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body ">
                                <h4 class="card-title">Facturation par type de client</h4>
                                <p class="card-category">année:{{ $annee }}</p>
                                <div id="piechart">
                                   
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
@include('charts_facturation')
@endsection
