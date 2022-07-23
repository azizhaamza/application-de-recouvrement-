<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Création Facture
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <form method="post" action="{{ route('facturation.store') }}">
                    @csrf
                    
                    <div class="shadow overflow-hidden sm:rounded-md row">
                        <div class="px-4 py-5 bg-white sm:p-6 col-md-4">
                            <label for="reference" class="block font-medium text-sm text-gray-700">Réference</label>
                            <input id="reference" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="reference"  required  />
                            @error('reference')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input id="nom" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="nom"  required />
                            @error('nom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prenom" class="block font-medium text-sm text-gray-700">Prénom</label>
                            <input id="prenom" class="form-input rounded-md shadow-sm mt-1 block w-full " type="text" name="prenom"  required  />
                            @error('prenom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6 ">
                            <label for="adresse" class="block font-medium text-sm text-gray-700">Adresse</label>
                            <input id="adresse" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="adresse"  required />
                            @error('adresse')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="consommation" class="block font-medium text-sm text-gray-700">Consommation</label>
                            <input id="consommation" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="consommation"  required  />
                            @error('consommation')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nbmois" class="block font-medium text-sm text-gray-700">Nombre de mois</label>
                            <input id="nbmois" class="form-input rounded-md shadow-sm mt-1 block w-full " type="text" name="nbmois" placeholder="Ex:2"  required  />
                            @error('nbmois')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prix" class="block font-medium text-sm text-gray-700">Prix</label>
                            <input id="prix" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="prix"  required />
                            @error('prix')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indexnouv" class="block font-medium text-sm text-gray-700">index nouveau</label>
                            <input id="indexnouv" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="indexnouv"  required />
                            @error('index nouveau')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indexanci" class="block font-medium text-sm text-gray-700">index ancien</label>
                            <input id="indexanci" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="indexanci"  required />
                            @error('index ancien')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="redfix" class="block font-medium text-sm text-gray-700">Red.fixe</label>
                            <input id="redfix" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="redfix"  required  />
                            @error('redfix')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tva" class="block font-medium text-sm text-gray-700">TVA</label>
                            <input id="tva" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="tva"  required />
                            @error('tva')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="rtt" class="block font-medium text-sm text-gray-700">RTT</label>
                            <input id="rtt" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="rtt"  required  />
                            @error('rtt')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="totalservices" class="block font-medium text-sm text-gray-700">Total Service</label>
                            <input id="totalservices" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="totalservices"  required  />
                            @error('Total Service')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="montant_a_deduire" class="block font-medium text-sm text-gray-700">Montant à déduire</label>
                            <input id="montant_a_deduire" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="montant_a_deduire"  required  />
                            @error('Montant à déduire')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="montant_de_credit" class="block font-medium text-sm text-gray-700">Montant de crédit</label>
                            <input id="montant_de_credit" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="montant_de_credit"  required  />
                            @error('montant_de_credit')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="periodedebut" class="block font-medium text-sm text-gray-700">Période Début</label>
                            <input id="periodedebut" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="periodedebut" placeholder="Ex:2018-01-15" required  />
                            @error('période de debut')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="periodefin" class="block font-medium text-sm text-gray-700">Période Fin</label>
                            <input id="periodefin" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="periodefin" placeholder="Ex:2016-10-1" required  />
                            @error('pdef')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="payeravl" class="block font-medium text-sm text-gray-700">Payer avant le</label>
                            <input id="payeravl" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="payeravl" placeholder="Ex:2018-01-15" required />
                            @error('payeravl')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="district" class="block font-medium text-sm text-gray-700">District</label>
                            <select name="district"  class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                                @foreach($districts as $district)
                                <option value="{{ $district->id }}" id="district">{{$district->nom_district}}</option>
                                @endforeach
                            </select>
                            @error('district')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_type" class="block font-medium text-sm text-gray-700">Type client</label>
                            <select name="id_type"  class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                                @foreach($type_client as $client)
                                <option value="{{ $client->id }}" id="id_type">{{$client->type}}</option>
                                @endforeach
                            </select>                            
                            @error('type client')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" value="Create">
                                
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>