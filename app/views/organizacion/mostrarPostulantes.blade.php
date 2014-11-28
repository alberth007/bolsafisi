<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu principal Estudiante</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user scalable=no">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	
	<style>
	.color2{
  	background-color: orange; 
	}
	.color1{
		background-color: blue;
	}
	#fondo-natural{
		background-color: #F5F5F5;
	}
	</style>

</head>
<body id="fondo-natural">

	<nav role="navigation" class="navbar navbar-inverse">
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand">Logotipo</a>
	        </div>

	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                  <li><a href="/organizaciones/principal">Inicio</a></li>
	                <li><a href="/registro/organizaciones">Modificar datos de empresa</a></li>
	                <li><a href="/organizaciones/crearAnuncio">Crear un anuncio</a></li>
	                <li class="active"><a href="/organizaciones/misAnuncios" >Mis Anuncios</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-primary navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Inicia Sesion</a>
		           	<a href="/usuarios/create" class="btn btn-primary navbar-btn navbar-right" role="button">Registrate</a>
	        	</div>
	        	@endif
	        	@if(Auth::check())
	        		<a href="/principal" class="btn btn-primary navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Cerrar Sesion</a>
	        </div>
	        @endif
	</nav>

	<div class="container">	
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Aviso: {{$anuncio->titulo}}</h3>
			</div>
			<div class="panel-body">

@if($cantidad > 0)
@foreach($personanatu as $postu)

		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">{{$postu->nombre}} {{$postu->apellido}} </h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail" style="width: 110px; height: 110px;margin-left: 130px;">
									      {{ HTML::image('img/usuario.png')}}
									      <div class="caption">
									      </div>
						 </div>
					</div>
					<div class="col-md-4">
				@foreach($eaps as $eap)
					@if($eap->id == $postu->eap_id)
					<p>Eap: {{$eap->nombre}}</p>
					@endif
				@endforeach
				<p>Ciclo: {{$postu->ciclo}}</p>
				<p>Estado de la postulacion: {{$postu->estado}}</p>
			</div>
				<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-aligment-right" style="margin-top: 30px;">Ver CV completo</button>
				</div>
				</div>
			</div>
		</div>

@endforeach
@endif
@if($cantidad == 0)
	<p>{{$mensaje}}</p>
@endif

</div>
</div>
</div>

</body>
</html>