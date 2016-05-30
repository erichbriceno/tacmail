<ul class="nav navbar-nav">
    <li @if(Route::is('mails.control')) class="active" @endif><a href="http://tacmail">Inicio</a></li>

    <li @if(Route::is('mails.querySuitcases')) class="active" @endif class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Acciones<span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('mails.querySuitcases')}}">Valija</a></li>
                <li><a href="{{ route('mails.upload')}}">Carga</a></li>
            </ul>
        </a>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Seguimiento<span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">General</a></li>
                <li><a href="#">Valijas</a></li>
                <li><a href="#">Correspondencias</a></li>
                <li class="divider"></li>
                <li><a href="#">Automatizacón</a></li>
                <li><a href="#">Registro Civil</a></li>
                <li><a href="#">Registro Electoral</a></li>
                <li><a href="#">Gestion Administrativa</a></li>
            </ul>
        </a>
    </li>

    <li><a href="#">Estadisticas</a></li>
</ul>