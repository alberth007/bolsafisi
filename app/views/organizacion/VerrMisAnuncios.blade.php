<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrar nuevo anuncio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user scalable=no">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::script('js/ajax.js') }}
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
	.color5{
		color: white;
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
	                <li class="active"><a href="#" >Mis Anuncios</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-primary navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Inicia Sesion</a>
		           	<a href="/usuarios/create" class="btn btn-primary navbar-btn navbar-right" role="button">Registrate</a>
	        	</div>
	        	@endif
	        	@if(Auth::check())
	        		<a href="/principal" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Cerrar Sesion</a>
	        </div>
	        @endif
	</nav>
	<div class="container">	
		<div class="row">
				<div class="col-lg-8">
					@foreach ($anuncios as $anuncio)
				
						<div class="panel panel-primary">
							  <div class="panel-heading">
							  	<h2 class="panel-title">
							    	<li><a class="color5" href="/verAnuncio/{{$anuncio->id}}">{{$anuncio->titulo}}</a></li>
							    </h2>
							  </div>
							  <div class="panel-body">
							  	<div class="row">
							  		<div class="col-md-4">
							  			<div class="thumbnail" style="width: 110px; height: 110px;margin-left: 70px;">
									      {{ HTML::image('img/convocatoria.png')}}
									      <div class="caption">
									      </div>
						 				</div>
							  		</div>
							  		<div class="col-md-8">
							    <h5>Area del puesto: {{$anuncio->area}}</h5>
							    <h5>Fecha de publicacion: {{$anuncio->created_at}}</h5>
							    <h5>Salario ofrecido: {{$anuncio->salario}}</h5>
							    <h5>Fecha de termino: {{$anuncio->fecha_limite}}</h5>
							    	</div>
							  </div>
							  </div>
						</div>
					@endforeach
		
		
				</div>
		</div>
	</div>

	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</body>
</html>
