@if (Sentry::check())
<!--    <li><a href="{{ URL::route('Sentinel\logout') }}">{{ Session::has('userId') ? 'Vladimirs' : 'Valdemārs' }}/{{ Session::get('email') }} Logout</a></li> -->
    <li><a href="{{ URL::route('Sentinel\logout') }}">{{ Session::has('userId') ? Session::get('username') : 'Valdemārs' }}/{{ Session::get('email') }} Logout</a></li>
    Sentry::getUser()
@else
    <li><a href="#login1" data-toggle="modal">Log In #1</a></li>
    <li><a href="#login2" data-toggle="modal">Log In #2</a></li>
@endif   

