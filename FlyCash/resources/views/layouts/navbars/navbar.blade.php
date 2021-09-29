
@if (session()->has('email') )
    @include('layouts.navbars.navs.auth')

@else
    @include('layouts.navbars.navs.guest')
@endif