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
                                        <a href= "{{ route('creance_par_district') }}" :active="request()->routeIs('creance_par_district')">
                                             {{ __('Créance par catégorie de client et par district' ) }}
                                        </a>
                                    </h4>
                                </div> 
                                <h4 class="card-title">Créance mensuelles</h4> 
                                @foreach ($creances as $creance )
                                @endforeach
                                <p class="card-category"> Date : {{ $creance->anne_debut }} </p>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <form action="/search" method="get">
                                    <div>
                                        <input type="search" name="search" class="mt-1" placeholder="Année" />
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
                                                <th>Catégorie</th>
                                                <th>Ordinaire</th>
                                                <th>Industrielle</th>
                                                <th>Contentieux</th>
                                                <th >Rejets Bancaires et Postaux</th>
                                                <th>Societes Nationales Et Offices</th>
                                                <th>ADM</th>
                                                <th>Collectivites Publiques</th>
                                                <th>Total</th>

                                            </tr>
                                        </thead>
                                        <tbody> 
                                                
                                            <tr>
                                                <th>Janvier</th> 
                                                @foreach ($creancejanvier as $creancjanvi )
                                                    <td>{{ $creancjanvi->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',1)->sum('montant')}} </td>   
                                            
                                            </tr>
                                            <tr>
                                                
                                                <th>Février</th>   
                                                @foreach ($creancefevrier as $creancefevrie )
                                                    <td>{{ $creancefevrie->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',2)->sum('montant')}} </td>
                                            </tr>
                                            <tr>
                                                <th>Mars</th> 
                                                @foreach ($creanceMars as $creanceMar )
                                                    <td>{{ $creanceMar->total }}</td>
                                                @endforeach  
                                                
                                                <td>{{ $creances->where('mois_debut','=',3)->sum('montant')}} </td>

                                            </tr>
                                            <tr>
                                                <th>Avril</th>   
                                                @foreach ($creanceavril as $creanceavri )
                                                    
                                                    <td>{{ $creanceavri->total}}</td>
                                                @endforeach
    
                                                <td>{{ $creances->where('mois_debut','=',4)->sum('montant')}} </td>

                                            </tr>
                                            <tr>
                                                <th>May</th>   
                                                @foreach ($creancemay as $creancema )
                                                    <td>{{ $creancema->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',5)->sum('montant')}} </td>

                                            </tr>
                                            <tr>
                                                <th>Juin</th>   
                                                @foreach ($creancejuin as $creancejui )
                                                    <td>{{ $creancejui->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',6)->sum('montant')}} </td>

                                                
                                            </tr>
                                            <tr>
                                                <th>Juillet</th>   
                                                @foreach ($creancejuillet as $creancejuille )
                                                    <td>{{ $creancejuille->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',7)->sum('montant')}} </td>

                                            </tr> 
                                            <tr>
                                                <th>Août</th>   
                                                @foreach ($creanceaout as $creanceaou )
                                                    <td>{{ $creanceaou->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',9)->sum('montant')}} </td>

                                            </tr> 
                                            <tr>
                                                <th>Septembre</th>   
                                                @foreach ($creanceseptembre as $creanceseptembr )
                                                    <td>{{ $creanceseptembr->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',9)->sum('montant')}} </td>
                                            </tr>   
                                            <tr>
                                                <th>octobre</th>   
                                                @foreach ($creanceoctober as $creanceoctobr )
                                                    <td>{{ $creanceoctobr->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',10)->sum('montant')}} </td>

                                            </tr> 
                                            <tr>
                                                <th>Novombre</th>   
                                                @foreach ($creancenovomber as $creancenovomber )
                                                    <td>{{ $creancenovomber->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',11)->sum('montant')}} </td>

                                            </tr> 
                                            <tr>
                                                <th>Décembre</th>   
                                                @foreach ($creancedecembre as $creancedecembr )
                                                    <td>{{ $creancedecembr->total }}</td>
                                                @endforeach
                                                <td>{{ $creances->where('mois_debut','=',12)->sum('montant')}} </td>

                                            </tr> 
            
                                        </tbody>  
                                </table>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">
                            <h4 class="card-title"></h4>
                            <div id="top_x_div" style="height: 500px;">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);
  
        function drawStuff() {
          var data = new google.visualization.arrayToDataTable([
            ['Mois', 'Total'],
            <?php echo $chartCreance ?>
                ]);
  
          var options = {
            title: 'Creance par district',
            width: 900,
            legend: { position: 'none' },
            chart: { title: 'Créance Mensuelle',
                     subtitle: 'Total créances par mois' },
            bars: 'horizontal', // Required for Material Bar Charts.
            axes: {
              x: {
                0: { side: 'top', label: 'Total'} // Top x-axis.
              }
            },
            bar: { groupWidth: "90%" }
          };
  
          var chart = new google.charts.Bar(document.getElementById('top_x_div'));
          chart.draw(data, options);
        };
      </script>
@endsection


        
   
   


