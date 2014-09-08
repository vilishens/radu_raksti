@if (Sentry::check())
<!--    <li><a href="{{ URL::route('Sentinel\logout') }}">{{ Session::has('userId') ? 'Vladimirs' : 'Valdemārs' }}/{{ Session::get('email') }} Logout</a></li> -->
<!--
    Jāatrod labāks veids, kā atrast lietotāja vārdu
    <li><a href="{{ URL::route('Sentinel\logout') }}">{{ Session::has('userId') ? '<b>'.Sentry::getUser()->username.'</b>' : 'Valdemārs' }}/{{ Session::get('email') }} Logout</a></li>
-->
    <li><a href="{{ URL::route('Sentinel\logout') }}">{{ Sentry::getUser()->username }} ({{ Session::get('email') }}) {{ Lang::get('base.menu_logout') }}</a></li>
@else
    <li><a href="#login1" data-toggle="modal">{{ Lang::get('base.menu_login_1') }}</a></li>
    <li><a href="#login2" data-toggle="modal">{{ Lang::get('base.menu_login') }}</a></li>
@endif   

