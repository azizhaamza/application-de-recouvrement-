@extends('layoutsresponsable.app', ['activePage' => 'creance', 'title' => 'CREANCE',  'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <div class="d-flex flex-row-reverse">
                                    <h4 class="card-title">
                                        <a href= "{{ route('dashboard.creance') }}" :active="request()->routeIs('dashboard.creance')">
                                             {{ __('Créance Mensuelles' ) }}
                                        </a>
                                    </h4>
                                </div> 
                                <h4 class="card-title">Créance par catégorie de client et par district</h4> 
                                {{-- ----- foreach --}}
                                <p class="card-category"> Année :{{ $annee }} </p>
                                
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <form action="/dashboard/creance_par_district/recherche" method="get">
                                    <div>
                                        <input type="search" name="anne" class="mt-1" placeholder="Année" />
                                        <span >
                                            <button type="submit" class="ml-3 btn-dark">Recherche</button>
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
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',1)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',1)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Ariana</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',2)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',2)->sum('montant')}}</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Ezzahra</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',3)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',3)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Mourouj</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',4)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',4)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Manouba</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',5)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',5)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>El Menzah</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',6)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',6)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Kram</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',7)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',7)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td> Bardo</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',8)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',8)->sum('montant')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="7">Nord</th>
                                            </tr>
                                                    <tr>
                                                        <td> Menzel Bourguiba</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',9)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',9)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Zaghouan</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',10)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',10)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Bizerte</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',11)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',11)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td> Nabeul</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',12)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',12)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Menzel B-zelfa</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',13)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',13)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Menzel Temime</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',14)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',14)->sum('montant')}}</th> 
                                                    </tr>
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Nord Ouest</th>
                                            </tr>
                                                    <tr>
                                                        <td> Tabarka</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',15)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',15)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Siliana</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',16)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',16)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Beja</td> 
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',17)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',17)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jendouba</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',18)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',18)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kef</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',19)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',19)->sum('montant')}}</th> 
                                                    </tr>
                                            </tr>
                                            <tr>
                                                <th rowspan="9">Center</th>
                                            </tr>
                                                    <tr>
                                                        <td>El jem</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',20)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',20)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kairouan Nord</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',21)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',21)->sum('montant')}}</th> 
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Sousse Nord</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',22)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',22)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Monastir</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',23)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',23)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Mahdia</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',24)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',24)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sousse</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',25)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',25)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Moknine</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',26)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',26)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Kairouan</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',27)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',27)->sum('montant')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Sud Ouest</th>
                                            </tr>
                                                    <tr>
                                                        <td>Metlaoui</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',28)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',28)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kasserine</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',29)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',29)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sidi Bouzid</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',30)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',30)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Gafsa</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',31)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',31)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tozeur</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',32)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',32)->sum('montant')}}</th>
                                                    </tr>
                                                    
                                            </tr>
                                            <tr>
                                                <th rowspan="8">Sud</th>

                                            </tr>
                                                    <tr>
                                                        <td>Ben Guerdene</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',33)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',33)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kebili</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',34)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',34)->sum('montant')}}</th> 
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Tatouine</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',35)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',35)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Mednine</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',36)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',36)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Gabes</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',37)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',37)->sum('montant')}}</th> 
                                                    </tr>
                                                    <tr>
                                                        <td>Zarzis</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',38)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',38)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jerba</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',39)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',39)->sum('montant')}}</th>
                                                    </tr>
                                            
                                            </tr>
                                            <tr>
                                                <th rowspan="6">Sfax</th>
                                            </tr>
                                                    <tr>
                                                        <td>Jebniana</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',40)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',40)->sum('montant')}}</th>
                                                    </tr>
                                
                                                    <tr>
                                                        <td>Mahres</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',41)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',41)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Nord</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',42)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',42)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Sud</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',43)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',43)->sum('montant')}}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Sfax Ville</td>
                                                        <th>{{ $creances->where('id_type','=',1)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',2)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',3)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',4)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',5)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',6)->where('district','=',44)->sum('montant')}}</th>
                                                        <th>{{ $creances->where('id_type','=',7)->where('district','=',44)->sum('montant')}}</th>
                                                    </tr>
                                                    
                                            </tr>
                
                                    </tbody>  
                                </table>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">
                            <div id="top_x_div" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @include('charts_creance')
@endsection      


