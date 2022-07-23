@extends('layoutsresponsable.app', ['activePage' => 'Situat_de_recou', 'title' => 'Situation recouvrement',  'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover" >
                            <div class="card-header ">
                                <h4 class="card-title">Situation de recouvrement</h4>
                                <div style="overflow-x:auto;">
                                    <table  class="table  table-bordered" > 
                                        <thead>
                                            <tr>
                                                <th >Catégorie</th>
                                                <th>Janvier</th>
                                                <th>Février</th>
                                                <th>Mars</th>
                                                <th >Avril</th>
                                                <th>May</th>
                                                <th>Juin</th>
                                                <th>juillet</th>
                                                <th>Août</th>
                                                <th>Septembre</th>
                                                <th>octobre</th>
                                                <th>Novombre</th>
                                                <th>Décembre</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr>
                                                <th>creance</th>  
                                                @foreach ($creances as $creanc )
                                                <td>{{ $creanc->total}} </td>  
                                                @endforeach
                                                <td>{{$totcreance->sum('montant')}} </td> 
                                            </tr>
                                            <tr>
                                                <th >facturation</th>
                                                @foreach ($facturat as $fact )
                                                <td>{{ $fact->total}}</td>
                                                    
                                                @endforeach
                                               
                                                
                            
                                                <td>{{ $facturations->sum('total')}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>  
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">                    
            
                            <div id="curve_chart"></div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    @include('charts_situation')
@endsection       


  
  