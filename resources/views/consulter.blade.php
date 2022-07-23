<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div >
            <div>
                <div class="p-6 ">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                              @if (Session::has('success'))
                                <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 py-5 mb-4">
                                  <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                                    <span class="text-green-500">
                                        <svg fill="currentColor"
                                                      viewBox="0 0 20 20"
                                                      class="h-6 w-6">
                                            <path fill-rule="evenodd"
                                                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                              clip-rule="evenodd">
                                              </path>
                                        </svg>
                                    </span>
                                  </div>
                                  <div class="alert-content ml-4">
                                      <div class="alert-title font-semibold text-lg text-green-800">
                                        {{ __('Success') }}
                                      </div>
                                      <div class="alert-description text-sm text-green-600">
                                        {{ Session::get('success') }}
                                      </div>
                                  </div>
                                </div>
                              @endif
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Reference
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Nom
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Prénom
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Nombre de MOIS
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Période début
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Période Fin
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Montant initiale
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Montant à payer 
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date de Passer demande
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      reponse
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="flex items-center">
                                        
                                        
                                        @foreach ($demande_consulter as $demande)
                                            
                                        
                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                           {{ $demande->reference }}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->nom }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->prenom }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->nbmois }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->periodedebut }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->periodefin }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->montant_initial }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $demande->montant_a_payer }}
                                      </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                      <div class="text-sm text-gray-900">{{ $demande->date_de_passer_demande }}</div>
                                      
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                      @if($demande->reponse == 'Accepter')
                                      <a href="/paiementdemande/{{ $demande->reference }}/{{ $demande->montant_a_payer }}"><button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">payer</a></button>
                                      @elseif($demande->reponse =='Refuser')
                                      <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Refuser</a></button>
                                      @else
                                      <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">En cours</a></button>

                                      @endif
                                    
                                    </td>
                                  
                                  </tr>
                      
                                  
                                </tbody>
                                @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
