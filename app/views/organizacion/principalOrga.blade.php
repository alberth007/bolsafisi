<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu principal Organizaciones</title>
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
	#mi-fondo{
		
		background-image: url('img/Ger_empresas.jpg');
		background-size: 100%;
		background-repeat: no-repeat;

	}
	</style>

</head>
<body id="mifondo">
	<!-- <div class="top-gec">
		<div class="row">
			<div class="col-lg-8">
				<img src="cabecera.png" alt="">
			</div>
			<div class="col-lg-2">
				logo facebook
			</div>
			<div class="col-lg-2">
				logo 2
			</div>
		</div>
	</div> -->
	@if(Auth::check())
		@if($exitepersona == '1')
			@foreach ($orgaid as $orga)
			<Input type="hidden" id="orga" name="orga" value="{{$orga->id}}">
			@endforeach
		<Input type="hidden" id="exitepersona" name="exitepersona" value="{{$exitepersona}}">
		@endif
	@endif
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
	                <li class="active"><a href="/organizaciones/principal">Inicio</a></li>
	                <li><a href="/registro/organizaciones">Modificar datos de empresa</a></li>
	                <li><a href="/organizaciones/crearAnuncio">Crear un anuncio</a></li>
	                <li><a href="/organizaciones/misAnuncios">Mis Anuncios</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-primary navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Inicia Sesion</a>
		           	<a href="/usuarios/create" class="btn btn-success navbar-btn navbar-right" role="button">Registrate</a>
	        	</div>
	        	@endif
	        	@if(Auth::check())
	        		<a href="/principal" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Cerrar Sesion</a>
	        </div>
	        @endif
	</nav>
		
		
<!-- termina el carrousel -->
<!-- hago un sistema de grillas -->

						<div id="crearanuncio"></div>
						
						

		
		@if(Session::has('mensaje'))
		<div class="alert alert-{{ Session::get('tipoMensaje') }} alert-dismissible bf-mensaje" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<p>{{ Session::get('mensaje') }}</p>
		</div>
		@endif

	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</body>
</html>
