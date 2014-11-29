<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Modificar Datos</title>
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
	            <a href="#" class="navbar-brand">Logotipo</a>
	        </div>

	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	               	<li><a href="/estudiantes/principal">Inicio</a></li>
	                <li class="active"><a href="#">Modificar datos</a></li>
	                <li><a href="/estudiantes/postulaciones">Mis postulaciones</a></li>
	                
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


<form action="{{ URL::action('RegistronaturalesController@store')}}" method="POST" id="f1">

<div class="container">

	<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Datos Personales</h3>
			</div>
			<div class="panel-body">
	
	<div class="form-group">
	    <label for="usuario">Nombres: </label>
	    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombres">
	    @if ($errors->has('nombre'))
		<p class="alert-danger">{{ $errors->first('nombre') }}</p>
		@endif
  	</div>

	<div class="form-group">
		<label for="Apellido">Apellidos: </label>
		<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellidos">
		 @if ($errors->has('apellido'))
		<p class="alert-danger">{{ $errors->first('apellido') }}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="f">Femenino</label>
		<input type="radio" id="f" name="sexo" value="f">
		<label for="ma">Masculino</label>
		<input type="radio" id="m" name="sexo" value="m">
		 @if ($errors->has('sexo'))
		<p class="alert-danger">{{ $errors->first('sexo') }}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="Direccion">Direccion: </label>
		<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion">
		 @if ($errors->has('direccion'))
		<p class="alert-danger">{{ $errors->first('direccion') }}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="dni">Dni: </label>
		<input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese dni">
		 @if ($errors->has('dni'))
		<p class="alert-danger">{{ $errors->first('dni') }}</p>
		@endif
	</div>

	<div class="form-group">
		<label for="telefono">Telefono: </label>
		<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono">
		 @if ($errors->has('telefono'))
		<p class="alert-danger">{{ $errors->first('telefono') }}</p>
		@endif

	</div>

	<div class="form-group">
		<label for="email">Correo Electronico: </label>
		<input type="text" class="form-control" id="email" name="email" placeholder="Ingrese email">
	</div>

	<div class="form-group">
		<label for="eap">Eap: </label>
		<select name="eap">
			<option value="0">Seleccione</option>
			@foreach ($eaps as $eap)
				<option value="{{ $eap->id }}">{{ $eap->nombre }}</option>
			@endforeach
		</select>
		 @if ($errors->has('eap'))
		<p class="alert-danger">{{ $errors->first('eap') }}</p>
		@endif
		<!-- <input type="text" class="form-control" id="eap" name="eap" placeholder="Ingrese nro de eap "> -->
	</div>

	<div class="form-group">
		<label for="ciclo">Ciclo: </label>
		<input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Ingrese ciclo">
		 @if ($errors->has('ciclo'))
		<p class="alert-danger">{{ $errors->first('ciclo') }}</p>
		@endif
	</div>

	<button type="submit" class="btn btn-primary">Siguiente</button>
	</div>
	</div>
	</div>
</form>


</body>
</html>