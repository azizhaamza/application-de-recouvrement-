<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Passer demande d'echlonnement
            </h2>
        </x-slot>
                <div>
                    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                                @foreach ($facture as $fact )
        
                                @endforeach
                                <form action="{{  route('demande_passer') }} " method="POST">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="reference" class="block font-medium text-sm text-gray-700"> Reference</label>
                                            <input type="text" value="{{ $fact->reference }}" name="reference" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="nom" class="block font-medium text-sm text-gray-700">Nom</label>
                                            <input type="text" value="{{ $fact->nom }}" name="nom" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="prenom" class="block font-medium text-sm text-gray-700">Prénom</label>
                                            <input type="text" value="{{ $fact->prenom }}" name="prenom" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="nbmois" class="block font-medium text-sm text-gray-700">Nombre de mois</label>
                                            <input type="text" value="{{ $fact->nbmois }}" name="nbmois" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="periodedebut" class="block font-medium text-sm text-gray-700">Période début de la facture</label>
                                            <input type="text" value="{{ $fact->periodedebut }}" name="periodedebut" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="periodefin" class="block font-medium text-sm text-gray-700">Période fin de la facture</label>
                                            <input type="text" value="{{ $fact->periodefin }}" name="periodefin" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="montant" class="block font-medium text-sm text-gray-700"> Montant </label>
                                            <input id="montant" type="text" value="{{ $fact->montant}}" name="montant" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <label for="montantpayer" class="block font-medium text-sm text-gray-700">Montant à payer</label>
                                            <input  id="montantpayer" type="text" name="montant_payer" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                        </div>
                                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <input type="submit" value="Passer" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">&nbsp;
                                            <input type="submit" value="Annuler" href="{{ route('dashboard')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                
            
        
</x-app-layout>
    
 