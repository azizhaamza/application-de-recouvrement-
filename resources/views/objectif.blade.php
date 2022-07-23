@extends('layoutsresponsable.app', ['activePage' => 'objectif', 'title' => 'Objectif', 'navName' => 'objectif', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row">

                    <div class="card col-md-8">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">{{ __('Objectif') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('objectif.post') }}">
                                @csrf
                                
                                <h6 class="heading-small text-muted mb-4">{{ __('Objectif par District') }}</h6>
                                
                               
                                <div class="pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="district">
                                        {{ __('District') }}
                                        </label>
                                        <!-- liste deroulante de district-->
                                        <select name="district"  class="form-control" required >
                                            @foreach ($districts as $district )
                                            <option value="{{ $district->id }}" class="form-control"  >{{ $district->nom_district }} </option>
                                            @endforeach
                                        </select>
                                        
        
                            
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="pourcentage">{{ __('Pourcentage de créance par rapport facturation') }}</label>
                                        <input type="text" name="pourcentage"  class="form-control" size='2' max="100" min="1" required>
                                        @error('pourcentage')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="annee">{{ __('Année') }}</label>
                                        <input type="text" name="annee"  class="form-control"  size='4' required>
                                        @error('annee')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">{{ __('Envoyer') }}</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection