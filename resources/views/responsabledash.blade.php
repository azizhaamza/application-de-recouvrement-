@extends('layoutsresponsable.app', ['activePage' => 'dashboard', 'title' => 'RECOUVREMENT', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">
                            <div id="top_x_div" style="height: 500px;"></div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i> {{ __('Campaign sent 2 days ago') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-body ">
                            <div id="piechart"></div> 
                        </div>
                        <div class="card-footer ">
                            <hr>
                             <div class="stats">
                                <i class="fa fa-history"></i> {{ __('Updated 3 minutes ago') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">{{ __('Situation de recouvrement') }}</h4>
                            <p class="card-category">{{ __('Evolution de créance par rapport facturation') }}</p>
                        </div>
                        <div class="card-body ">
                            <div id="curve_chart"></div> 
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    @push('js')
    @endpush
    @include('charts_facturation')
    @include('charts_situation')
    @include('charts_creance')      
@endsection
