@extends('layoutsresponsable.app', ['activePage' => 'ecart', 'title' => 'Ecart', 'navName' => 'ecart', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Ecart</h4>
                            <p class="card-category">District:{{ $district }}</p>
                            <p class="card-category">Année:{{ $annee }}</p>
                            <div class="d-flex flex-row-reverse">
                                <form action="{{ route('recherche.ecart') }}" method="get">
                                    <div>
                                        <select name="district"  class="form-control" required >
                                            @foreach ($districts as $district )
                                            <option value="{{ $district->id }}" class="form-control"  >{{ $district->nom_district }} </option>
                                            @endforeach
                                        </select>
                                        <input type="search" name="annee" class="mt-1" placeholder="Année" />

                                        <span >
                                            <button type="submit" class="ml-3 btn-dark">Recherche</button>
                                        </span> 
                                    </div>    
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Créance</th>
                                    <th>Facturation</th>
                                    <th>Pourcentage</th>
                                    <th>Objectif</th>
                                    <th>Ecart</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>{{ $creances}}</td>
                                        <td>{{ $facturations }}</td>
                                        <td>{{round( $taux)}}%</td>
                                        <td>{{ round($pourcent)}}%</td>
                                        <td>{{ round($ecart)}}%</td>
                                        
                                    </tr>     
                                </tbody>
                            </table>
                            @foreach ($objectifs as $objectif )
                                
                            @endforeach
                            @if($ecart>0)
                            <div class="alert alert-primary" ><h6>l'objectif de la district {{$objectif->district_nom }} pour l'année {{ $annee }} a été  atteindre avec un ecart poisitive de {{ round($ecart)}} % </h6></div>
                            @elseif($ecart<0)
                            <div class="alert alert-danger"><h6>l'objectif de la district {{$objectif->district_nom  }} pour l'année {{ $annee }} n'est pas atteindre et on a un ecart entre objectif et réalisation de {{ round($ecart)}}% </h6></div>
                            @else
                            <div class="alert alert-success"><h6>l'objectif de la district {{$objectif->district_nom  }} pour l'année {{ $annee }} a eté atteindre</h6></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection