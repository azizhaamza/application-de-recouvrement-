 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier facture
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('facturation.update', $facturation->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="reference" class="block font-medium text-sm text-gray-700">Réference</label>
                            <input type="text" name="reference" id="reference" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('reference', $facturation->reference) }}" />
                            @error('reference')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nom" class="block font-medium text-sm text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nom', $facturation->nom) }}" />
                            @error('nom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prenom" class="block font-medium text-sm text-gray-700">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nom', $facturation->prenom) }}" />
                            @error('prenom')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adresse" class="block font-medium text-sm text-gray-700">Adresse</label>
                            <input type="text" name="adresse" id="adresse" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('adresse', $facturation->adresse) }}" />
                            @error('adresse')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nbmois" class="block font-medium text-sm text-gray-700">nombre de mois</label>
                            <input type="text" name="nbmois" id="nbmois" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nbmois', $facturation->nbmois) }}" />
                            @error('nombre de mois')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="montant" class="block font-medium text-sm text-gray-700">Montant</label>
                            <input type="text" name="montant" id="montant" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('montant', $facturation->montant) }}" />
                            @error('montant')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="periodedebut" class="block font-medium text-sm text-gray-700">période debut</label>
                            <input type="text" name="periodedebut" id="periodedebut" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('periodedebut', $facturation->periodedebut) }}" />
                            @error('periodedebut')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="periodefin" class="block font-medium text-sm text-gray-700">Période de fin</label>
                            <input type="text" name="periodefin" id="periodefin" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('periodefin', $facturation->periodefin) }}" />
                            @error('période de fin')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="payeravl" class="block font-medium text-sm text-gray-700">payer avant le</label>
                            <input type="text" name="payeravl" id="payeravl" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('payeravl', $facturation->payeravl) }}" />
                            @error('période de fin')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="consommation" class="block font-medium text-sm text-gray-700">Consommation</label>
                            <input type="text" name="consommation" id="consommation" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('comsommation', $facturation->consommation) }}" />
                            @error('consommation')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="prix" class="block font-medium text-sm text-gray-700">Prix</label>
                            <input type="text" name="prix" id="prix" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('prix', $facturation->prix) }}" />
                            @error('prix')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indexnouv" class="block font-medium text-sm text-gray-700">Prix</label>
                            <input type="text" name="indexnouv" id="indexnouv" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('indexnouv', $facturation->indexnouv) }}" />
                            @error('indexnouv')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="indexanci" class="block font-medium text-sm text-gray-700">Prix</label>
                            <input type="text" name="indexanci" id="indexanci" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('indexanci', $facturation->indexanci) }}" />
                            @error('indexanci')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="rtt" class="block font-medium text-sm text-gray-700">RTT</label>
                            <input type="text" name="rtt" id="prix" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('rtt', $facturation->rtt) }}" />
                            @error('rtt')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tva" class="block font-medium text-sm text-gray-700">TVA</label>
                            <input type="text" name="tva" id="tva" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('tva', $facturation->tva) }}" />
                            @error('tva')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="redfix" class="block font-medium text-sm text-gray-700">Red.fix</label>
                            <input type="text" name="redfix" id="redfix" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('redfix', $facturation->redfix) }}" />
                            @error('redfix')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="totalservices" class="block font-medium text-sm text-gray-700">Total.services</label>
                            <input type="text" name="totalservices" id="totalservices" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('totalservices', $facturation->totalservices) }}" />
                            @error('total services')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="montant_a_deduire" class="block font-medium text-sm text-gray-700">Montant à déduire</label>
                            <input type="text" name="montant_a_deduire" id="montant_a_deduire" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('montant_a_deduire', $facturation->montant_a_deduire) }}" />
                            @error('montant_a_deduire')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="montant_de_credit" class="block font-medium text-sm text-gray-700">montant de credit</label>
                            <input type="text" name="montant_de_credit" id="montant_de_credit" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('montant_de_credit', $facturation->montant_de_credit) }}" />
                            @error('montant_de_credit')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_type" class="block font-medium text-sm text-gray-700">Type client</label>
                            <select name="id_type"  class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                                @foreach($type_client as $client)
                                @if($facturation->id_type==$client->id)
                                <option value="{{ $client->id }}" >{{ $client->type }}</option>
                                @endif
                                @endforeach
                                <option>--------------</option>
                                @foreach($type_client as $client)
                                <option value="{{ $client->id }}" id="id_type">{{$client->type}}</option>
                                @endforeach 
                             </select>
                            @error('id_type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="district" class="block font-medium text-sm text-gray-700">district</label>
                             <select name="district"  class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                                @foreach($districts as $distric)
                                @if($facturation->district==$distric->id)
                                <option value="{{ $distric->id }}">{{ $distric->nom_district }}</option>
                                @endif
                                @endforeach
                                <option>--------------</option>
                                @foreach($districts as $district)
                                <option value="{{ $district->id }}" id="district">{{$district->nom_district}}</option>
                                @endforeach 
                             </select>
                            @error('district')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="situation" class="block font-medium text-sm text-gray-700">situation</label>
                            <input type="text" name="situation" id="situation" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('situation', $facturation->situation) }}" />
                            @error('situation')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" value="Edit">
                        
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>