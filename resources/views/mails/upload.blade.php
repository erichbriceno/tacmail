@extends('layout')

@section('content')

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


@endsection