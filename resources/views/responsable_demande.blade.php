@extends('layoutsresponsable.app', ['activePage' => 'demande', 'title' => 'DEMANDES',  'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Demandes</h4>
                                @if (Session::has('success'))
                                    <div class="alert alert-success text-center">
                                        <p>{{ Session::get('success') }}</p>
                                    </div>
                                    @elseif(Session::has('error'))
                                        <div class='alert-danger alert'>
                                            <p>{{Session ::get('error')}}</p>
                                        </div>
                                @endif
                                <div class="card-body table-full-width">
                                    <table class="table table-responsive table-hover table-striped ">
                                        <thead>
                                            <th  >Réfer</th>
                                            <th >Nom</th>
                                            <th >Prénom</th>
                                            <th >Mois</th>
                                            <th >Période debut</th>
                                            <th >Période fin</th>
                                            <th >Montant</th>
                                            <th >Montant à payer</th>
                                            <th >Date de passer demande</th>
                                            <th ></th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($demandes as $demande)
                                            <tr>
                                                <td>{{ $demande->reference }}</td>
                                                <td>{{ $demande->nom }}</td>
                                                <td>{{ $demande->prenom }}</td>
                                                <td>{{ $demande->nbmois }}</td>
                                                <td style="padding:0.5px">{{ $demande->periodedebut }}</td>
                                                <td style="padding:0.5px">{{ $demande->periodefin }}</td>
                                                <td >{{ $demande->montant_initial }}</td>
                                                <td  >{{ $demande->montant_a_payer }}</td>
                                                <td >{{ $demande->date_de_passer_demande }}</td>
                                                <td ><a href="/demande/traitement/{{ $demande->reference }}"><button class="btn btn-success">Accepter</button></a></td>
                                                <td ><a href="/demande/traitement2/{{ $demande->reference }}"><button class="btn  btn-danger">refuser</button></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                    
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        