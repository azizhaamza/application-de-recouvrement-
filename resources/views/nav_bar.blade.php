<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="steg logo" width="50" height="50"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Accueille</a></li>
                            @else
                                <li><a href="{{ route('login') }}" class="btn">Authentification</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="btn">Inscription</a></li>
                                @endif
                            @endauth
                        @endif
                    
                    </ul>

        </div>
    </div>
</div>