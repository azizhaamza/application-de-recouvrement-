<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
<!-- sidebar qui affiche dans l'interface de responsable qui contient les liens pour statistique/créances / facturation/situation/objectif/ecart-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a  class="simple-text">
                {{ __("RECOUVREMENT") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Statistique") }}</p>
                </a>
            </li>
            
            <li class="nav-item dropdown @if($activePage == 'creance') active @endif">
                
                    <a class="nav-link " href="{{ route('dashboard.creance') }}" >
                        <i class="nc-icon nc-notes"></i>
                        <p>{{ __("Créances") }}</p> 
                    </a>
                    
                    
            </li>
           
            <li class="nav-item @if($activePage == 'facturation') active @endif">
                <a class="nav-link" href="{{ route('dashboard.facturation') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Facturation") }}</p>
                </a>
                
            </li>
            <li class="nav-item @if($activePage == 'Situat_de_recou') active @endif">
                <a class="nav-link" href= "{{ route('dashboard.taux') }}">
                    <i>
                        <img src="{{ asset('assets/images/taux.png') }}" style="width:25px">
                    </i>
                    <p style="width: 5px">{{ __("Situation recouvrement") }}</p>
                </a>
            </li>
           
            <li class="nav-item @if($activePage == 'demande') active @endif">
                <a class="nav-link" href="{{ route('demande_echlonnement') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Demandes") }}</p>
                </a>
            </li>
            <li class="nav-item  @if($activePage == 'objectif') active @endif">
                <a class="nav-link" href="{{ route('objectif') }}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>{{ __("Objectif") }}</p>
                </a>
            </li>
            <li class="nav-item  @if($activePage == 'ecart') active @endif">
                <a class="nav-link active bg-danger" href="{{ route('ecart') }}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>{{ __("Écart") }}</p>
                </a>
            </li>
        </ul>
        
    </div>
</div>

