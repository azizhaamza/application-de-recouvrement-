@if (auth()->check() && request()->route()->getName() != null)
    @include('layoutsresponsable.navbars.navs.auth')
@else
    @include('layoutsresponsable.navbars.navs.guest')
@endif