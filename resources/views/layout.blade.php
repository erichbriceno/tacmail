<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>TACMAIL</title>

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/tacmail_styles.css') }}" rel="stylesheet">


</head>
<body>

	<header>
		<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navagacion-fm">
							<span class="sr-only">Desplegar / Ocultar Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<a href="http://www.cne.gob.ve">
							<img src="http://tacmail/assets/img/logo-sm-CNE.png" class="img-responsive" alt="Logo CNE">
						</a>
					</div>
					
					
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navagacion-fm">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://tacmail">Inicio</a></li>
												
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Acciones <span class="caret"></span>
								<ul class="dropdown-menu" role="menu">
									<li><a href="http://tacmail/querySuitcases">Valija</a></li>
									<li><a href="#">Carga</a></li>
									<li><a href="#">Remitir</a></li>
								</ul>
							</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Seguimiento <span class="caret"></span>
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
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Erich Briceño <span class="badge">3</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><span class="badge" align="center">3</span> Pendientes</a></li>
								<li><a href="#"><span class="badge">2</span> Sin Salida</a></li>
								<li><a href="#"><span class="badge">12</span> Finalizados</a></li>
								
								<li class="divider"></li>
								<li><a href="#">Cerrar Sesion</a></li>
						  </ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
	<section class="jumbotron1">
		<div class="container1">
			<h1 class="titulo-blog">TACMAIL</h1>
			<p> Sistema de Gestion de Correspondencia</p>
			
		</div>
	</section>
	<section class="breadcrumb1">
				<ol class="breadcrumb">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Seguimiento</a></li>
					<li class="active">General</li>
				</ol>
	</section>
	
	@yield('content')
	
	<footer>
		<div class="container">
			<p>Sistema de Control de Correspondencia de la Oficina Regional Electoral del Estado Tachira <elit class=""></elit></p>
		</div>
	</footer>


    <script src="http://tacmail/assets/js/jquery.js"></script>
    <script src="http://tacmail/assets/js/bootstrap.min.js"></script>


</body>
</html>