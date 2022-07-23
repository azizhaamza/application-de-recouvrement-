<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <img src="{{ asset('assets/images/logo.png') }}"  style="width:50px" >
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">{{ __('Profile') }}</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <x-dropdown-link class="dropdown-item" :href="route('profile')">{{ __('Modifier profile') }}</x-dropdown-link>
                    </div>    
                </li>
                <li class="nav-item">
                    <!-- Authentication -->
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link class="text-danger" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="no-icon">{{ __('Log out') }}</span>
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>