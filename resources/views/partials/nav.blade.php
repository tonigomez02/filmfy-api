<nav>
    <ul>
        <button style="margin: 1%" class="btn btn-warning"><a class="link-dark"
                href="{{ route('contactos.index') }}">@lang('Contactos')</a></button>



        @guest
        <li><a href="{{route('login')}}">Login</a></li>
        @else

        <button class="btn btn-dark"><a href="#" class="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar Sesion</a></button>

        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>