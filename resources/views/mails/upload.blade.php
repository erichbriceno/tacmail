<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>TACMAIL - Carga</title>
	<link href="http://tacmail/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://tacmail/assets/css/tacmail_styles.css" rel="stylesheet">
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
							<img src="http://tacmail/assets/img/logo-sm-CNE.png"  class="img-responsive" alt="Logo CNE">
						</a>
					</div>
					
					
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navagacion-fm">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
												
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Acciones <span class="caret"></span>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Valija</a></li>
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
					<li><a href="#">Acciones</a></li>
					<li><a href="#">Carga</a></li>
					<li class="active">509127674</li>
				</ol>
	</section>
	
	<section class="container">
		<section class="main container">
		
			<section class="col-md-9">
				<h4>Información de Documento</h4>
				<form action="" class="">
					<div class="form-group col-md-6 mright">
						<label for="nombre">Numero de Oficio</label>
						<input class="form-control" id="nombre" type="text" placeholder="001200">
					</div>
					<div class="form-group col-md-6 mleft">
						<label for="nombre">Fecha de recepcion</label>
						<input class="form-control" id="nombre" type="date" placeholder="11/03/2016">
					</div>
					<div class="form-group col-md-6 mright">
						<label for="nombre"># Oficio Remitente</label>
						<input class="form-control" id="nombre" type="text" placeholder="#numero">
					</div>
					<div class="form-group col-md-6 mleft">
						<label for="option">Remitente</label>
						<select class="form-control" name="" id="option" >
							<option value=""></option>
							<option value="">CNE</option>
							<option value="">PODER JUDICIAL</option>
							<option value="">MINISTERIO PUBLICO</option>
							<option value="">JUZGADO</option>	
							<option value="">GREMIOS Y SINDICATOS</option>
						</select>
					</div>
					<div class="form-group">
						<label for="nombre">Detalle Remitente</label>
						<input class="form-control" id="nombre" type="text" placeholder="Detalle del Remitente">
					</div>
					<div class="form-group">
						<label for="mensaje">Asunto</label>
						<textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
					</div>
					<button class="btn pull-right">Siguiente</button>
					<br><br>
					<div class="form-group col-md-6 mright">
						<label for="nombre">Fecha de remisión</label>
						<input class="form-control" id="nombre" type="date" placeholder="11/03/2016">
					</div>
					<div class="form-group col-md-6 mleft">
						<label for="option">Dependencia Destinataria</label>
						<select class="form-control" name="" id="option" >
							<option value="">AUTOMATIZACION</option>
							<option value="">GESTION ADMINISTRATIVA</option>
							<option value="">TALENTO HUMANO</option>
							<option value="">REGISTRO ELECTORAL</option>	
							<option value="">REGISTRO CIVIL</option>
						</select>
					</div>
					<div class="form-group">
						<label for="mensaje">Observacion</label>
						<textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
					</div>
					<button class="btn pull-right">Remitir</button>
				</form>
			</section>
			
			<!-- aqui va el aside -->
			<aside class="col-md-3 hidden-xs hidden-sm">
			
				<h4>Pendientes</h4>
					<ul class="list-group">
						<a href="#" class="list-group-item">509127674</a>
					</ul>
								
				<h4>Correspondencias Recientes</h4>
				<div class="panel-group" id="accordion" role="tablist">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
							<h4 class="panel-title">
								<a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
									001200
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="#" class="pull-right">Editar</a>
								<p class="list-group-item-text">509127674</p>
								<p class="list-group-item-text">11/03/2016</p>
								<p class="list-group-item-text">CNE</p>
								<p class="list-group-item-text">Direccion General de Automatizacion</p>
								<p class="list-group-item-text">Detalle de remitente</p>
								<p class="list-group-item-text">Asunto: </p>
							</div>
						</div>
					</div>
					<!-- desde aqui -->
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
							<h4 class="panel-title">
								<a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
									001200
								</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="#" class="pull-right">Editar</a>
								<p class="list-group-item-text">509127674</p>
								<p class="list-group-item-text">11/03/2016</p>
								<p class="list-group-item-text">CNE</p>
								<p class="list-group-item-text">Direccion General de Automatizacion</p>
								<p class="list-group-item-text">Detalle de remitente</p>
								<p class="list-group-item-text">Asunto: </p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
							<h4 class="panel-title">
								<a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
									001200
								</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="#" class="pull-right">Editar</a>
								<p class="list-group-item-text">509127674</p>
								<p class="list-group-item-text">11/03/2016</p>
								<p class="list-group-item-text">CNE</p>
								<p class="list-group-item-text">Direccion General de Automatizacion</p>
								<p class="list-group-item-text">Detalle de remitente</p>
								<p class="list-group-item-text">Asunto: </p>
							</div>
						</div>
					</div>
					<!-- hasta aqui -->
				</div>
				<a href="#" class="pull-right"> Consultar Correspondencias </a>
			</aside>

		</section>
	</section>

	<!-- Aqui va el footer -->
	<footer>
		<div class="container">
			<p>Sistema de Control de Correspondencia de la Oficina Regional Electoral del Estado Tachira <elit class=""></elit></p>
		</div>
	</footer>

	<script src="http://tacmail/public/assets/js/jquery.js"></script>
	<script src="http://tacmail/public/assets/js/bootstrap.min.js"></script>
</body>
</html>