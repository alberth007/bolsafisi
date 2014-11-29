<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Organizaciones</title>
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
	            <a href="#" class="navbar-brand">BolsaFISI</a>
	        </div>

	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li><a href="/organizaciones/principal">Inicio</a></li>
	                <li class="active"><a href="#">Modificar datos de empresa</a></li>
	                <li><a href="/organizaciones/crearAnuncio">Crear un anuncio</a></li>
	                <li><a href="/organizaciones/misAnuncios" >Mis Anuncios</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
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

<form action="{{ URL::action('RegistronaturalesController@postActualizarOrga')}}" method="POST" id="f1">

<div class="container">	
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Datos Personales</h3>
			</div>
			<div class="panel-body">

	<div class="form-group">
	    <label for="nombre">Nombre o Marca: </label>
	    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre o marca de la empresa" value="{{ $usuario->persona->nombre }}">
	   @if ($errors->has('nombre'))
	   @foreach($errors->get('nombre') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
		@endif
  	</div>

	<div class="form-group">
		<label for="razon_social">Razon social: </label>
		<input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Ingrese razon social" value="{{ $usuario->persona->organizacion->razonsocial }}">
		@foreach($errors->get('razon_social') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
	</div>

	<div class="form-group">
		<label for="ruc">Ruc: </label>
		<input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingrese ruc" value="{{ $usuario->persona->organizacion->ruc }}">
		@foreach($errors->get('ruc') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
	</div>

	<div class="form-group">
		<label for="rubro">Rubro: </label>
		<input type="text" class="form-control" id="rubro" name="rubro" placeholder="Ingrese telefono" value="{{ $usuario->persona->organizacion->rubro }}">
		@foreach($errors->get('rubro') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
	</div>

	<div class="form-group">
		<label for="direccion">Direccion: </label>
		<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion" value="{{ $usuario->persona->direccion }}">
		@foreach($errors->get('direccion') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
	</div>


	<div class="form-group">
		<label for="telefono">Telefono: </label>
		<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono" value="{{ $usuario->persona->telefono }}">
		@foreach($errors->get('telefono') as $error)
			<p class="alert-danger">{{ $error }}</p>
			@endforeach
	</div>

	<div class="form-group">
		<label for="email">Correo Electronico: </label>
		<input type="text" class="form-control" id="email" name="email" placeholder="Ingrese email" value="{{ $usuario->persona->email }}">
		@foreach($errors->get('email') as $error)
			<p class="alert-danger">{{ $error }}</p>
		@endforeach
	</div>


	<div class="form-group">
		<label for="contacto">Nombre de contacto: </label>
		<input type="text" class="form-control" id="contacto" name="contacto" placeholder="Ingrese nombre del contacto" value="{{ $usuario->persona->organizacion->contacto }}">
		@foreach($errors->get('contacto') as $error)
			<p class="alert-danger">{{ $error }}</p>
			@endforeach
	</div>

	<button type="submit" class="btn btn-primary">Guardar Cambios</button>

		</div>
</div>

</div>
</form>
			

	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</body>
</html>