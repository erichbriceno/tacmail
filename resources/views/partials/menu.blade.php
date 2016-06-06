
<ul class="nav navbar-nav">

    <li role="presentation" {!! Html::classes(['active' => Route::is('mails.control')]) !!} >
        <a href="{{ route('mails.control') }}">Inicio</a>
    </li>

    <li role="presentation" {!! Html::classes(['active' => (Route::is('mails.querySuitcases')||Route::is('mails.upload')||Route::is('mails.queryDocs')), 'dropdown']) !!} >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Acciones <span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                @foreach($items as $route => $text)
                    <li role="presentation" {!! Html::classes(['active' => Route::is($route)]) !!}>
                        <a href="{{ route($route) }}">{{ $text }}</a>
                    </li>
                @endforeach
            </ul>
        </a>
    </li>

    <li role="presentation" {!! Html::classes(['active' => false, 'dropdown']) !!} >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Seguimiento <span class="caret"></span>
            <ul class="dropdown-menu" role="menu">
                <li role="presentation" {!! Html::classes(['active' => Route::is('mails.queryDocs')]) !!}>
                    <a href="{{ route('mails.control') }}">Automatizacón</a>
                </li>
                <li role="presentation" {!! Html::classes(['active' => Route::is('mails.queryDocs')]) !!}>
                    <a href="{{ route('mails.control') }}">Civil</a>
                </li>
                <li role="presentation" {!! Html::classes(['active' => Route::is('mails.queryDocs')]) !!}>
                    <a href="{{ route('mails.control') }}">Electoral</a>
                </li>
                <li role="presentation" {!! Html::classes(['active' => Route::is('mails.queryDocs')]) !!}>
                    <a href="{{ route('mails.control') }}">Administrativa</a>
                </li>
            </ul>
        </a>
    </li>

    <li role="presentation" {!! Html::classes(['active' => Route::is('mails.stats')]) !!} >
        <a href="{{ route('mails.stats') }}">Estadisticas</a>
    </li>
</ul>