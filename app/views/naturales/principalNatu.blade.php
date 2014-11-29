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
	</style>

</head>
<body>
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
	                <li class="active"><a href="/estudiantes/principal">Inicio</a></li>
	                <li><a href="/registro/estudiantes">Modificar datos</a></li>
	                <li><a href="/estudiantes/postulaciones">Mis postulaciones</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
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
	
	</div>
<!-- termina el carrousel -->
<!-- hago un sistema de grillas -->
		<div class="container">
			<section>
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-4">
						
						<div class="panel panel-default" style="margin-top: 10px;">
							<div class="panel-body">
								<!-- inicia la seleccion de busqueda -->
								<h3>Encuentra tu proximo trabajo</h3>
								<input type="text" class="small" placeholder="realiza tu busqueda" style="padding-right: 210px; padding-top: 5px; padding-bottom: 5px;">
								
								<div class="col-lg-4" style="padding-left: 0px;" >
								<button class="btn primary" style="margin-top: 10px; margin-bottom: 10px;">Buscar...</button>
								</div>
								<div class="col-lg-8" style="padding-top: 10px; padding-left: 0px;">
								<h5>busqueda avanzada</h5>
								</div>
								<!-- termina busqueda -->
								<!-- se mostraran una serie de imagenes  -->
								<div class="container">
									
								</div>
								<div >
								   <div class="thumbnail">
								      <img src="img5.jpg" alt="imagen">
								      <div class="caption">
								          <h3>Titulo 1</h3>
								              <p>Donec nec justo eget felis facilisis fermentum. 
								               Aliquam porttitor mauris sit amet orci.</p>
								          <p>
								          <a href="#" class="btn btn-primary">Ver</a> 
								          <a href="#" class="btn btn-default">Descargar</a>
								          </p>
								      </div>
								   </div>
								</div>

																	
								
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						
						<div class="panel panel-primary">
                            <div class="panel-heading" style="height: 61px;">
                                <h2 class="panel-title"><h2 style="margin-top: 5px;">Avisos destacados</h2></h2>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                
                                @foreach ($personaorganuncio as $anuncio)
				
						<div class="panel panel-primary">
							  <div class="panel-heading">
							  	<h2 class="panel-title">
							    	<h3>{{$anuncio->titulo}}</h3>
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
							  	<h4>Empresa: {{$anuncio->nombre}}</h4>
							    <h5>Area del puesto: {{$anuncio->area}}</h5>
							    <h5>Fecha de publicacion: {{$anuncio->created_at}}</h5>
							    <h5>Salario ofrecido: {{$anuncio->salario}}</h5>
							   
							   
							    <a href="/verAnuncio/{{$anuncio->id}}" class="btn btn-primary" role="button" style="margin-left: 10px; margin-right: 10px;">Ver anuncio</a>
							    	</div>
							  </div>
							  </div>
						</div>
					@endforeach
                                    
                                
            					
            					</div>
						    </div>
						</div>
					</div>
				</div>
			</section>
			

		</div>

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
