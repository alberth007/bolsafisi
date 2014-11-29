<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mis Postulaciones </title>
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
	            <a href="#" class="navbar-brand">BolsaFISI</a>
	        </div>

	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	               	<li><a href="/estudiantes/principal">Inicio</a></li>
	                <li><a href="/registro/estudiantes">Modificar datos</a></li>
	                <li class="active"><a href="#">Mis postulaciones</a></li>
	                
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
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Postulaciones</h3>
			</div>
			<div class="panel-body">
	
  				<table class="table table-hover">
                <thead>
				<tr>
					<th>Titulo de Anuncio</th>
					<th>Empresa</th>
					<th>Area</th>
					<th>Estado de la postulacion</th>
				</tr>
			    </thead>
			    <tbody>
			        @foreach($personaorgaviso as $postu)
                    	<td>{{$postu->titulo}}</td>
                    	<td>{{$postu->nombre}}</td>
                    	<td>{{$postu->area}}</td>
                    	<td>{{$postu->estado}}</td>
                    	
                    @endforeach
			    </tbody>
			    </table>
			</div>
		</div>
  	</div>

	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>

</body>
</html>