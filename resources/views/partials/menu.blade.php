
<ul class="nav navbar-nav">
    <li role="presentation" @if(Route::is('mails.control')) class="active" @endif>
        <a href="{{ route('mails.control') }}">Inicio</a>
    </li>

    <li role="presentation" @if(Route::is('mails.querySuitcases')||Route::is('mails.upload')||Route::is('mails.queryDocs')) class="active" @endif class="dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Acciones <span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                @foreach($items as $route => $text)
                    <li role="presentation" {!! Html::classes(['active' => Route::is($route)]) !!}}>
                        <a href="{{ route($route) }}">{{ $text }}</a>
                    </li>
                @endforeach
            </ul>
        </a>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Seguimiento <span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Automatizacón</a></li>
                <li><a href="#">Registro Civil</a></li>
                <li><a href="#">Registro Electoral</a></li>
                <li><a href="#">Gestion Administrativa</a></li>
            </ul>
        </a>
    </li>

    <li><a href="#">Estadisticas</a></li>
</ul>