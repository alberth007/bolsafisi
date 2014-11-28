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
	.color3{
		background-color: #808080
	}
	.colorle1{
		color: white;
	}
	.colorle2{
		color:  	#4682B4;
	}
	#color1{
		background-color: white;
	}
	#fondo-natural{
		background-color: #F5F5F5;
	}
	</style>

</head>



<body id="fondo-natural">

@if(Auth::User()->tipo == 'natural')
	<nav role="navigation" class="navbar navbar-inverse" style="margin-bottom: 0px;">
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
	                <li><a href="#">Mis postulaciones</a></li>
	                
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
@endif
@if(Auth::User()->tipo == 'organizacion')
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
	        		<a href="/principal" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Cerrar Sesion</a>
	        </div>
	        @endif
	</nav>
@endif
	
	<div id="color1" class="container">
		
		<div class="row">
			<div class="col-md-8" style="margin-top: 20px;">
				 <div class="panel panel-primary" style="border-top-width: 0px;">
					  <div class="row color3" style="margin-left: 0px; margin-right: 0px;">
					  	
							<h1 class="colorle1" style="margin-top: 0px; margin-bottom: 0px; padding-left: 10px;">{{$anuncioo->nombre}}</h1>
					  </div>
				  <div class="panel-body">
					    <div class="row color3">
					    	<h4 class="colorle1" style="margin-top: 8px; margin-bottom: 8px; padding-left: 10px;">DATOS DE LA EMPRESA</h4>
					    </div>
					    <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
					    	<div class="col-md-3">
					    		<div class="thumbnail" style="margin-bottom: 0px;">
								      <img src="img5.jpg" alt="imagen">
								      <div class="caption">
								          
								      </div>
								   </div>
					    	</div>
					    	<div class="col-md-9">
					    		<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
					    			<h3 class="text-center" style="margin-top: 0px; margin-bottom: 0px;">Nombre: {{$anuncioo->nombre}}</h3>
					    		</div>
					    		<div class="row" style="margin-bottom: 10px;">
						    		<div class="col-md-6">
										<h5 style="margin-top: 0px; margin-bottom: 0px;">Rubro: {{$anuncioo->rubro}}</h5>
						    		</div>
						    		<div class="col-md-6">
										<h5 style="margin-top: 0px; margin-bottom: 0px;">RUC: {{$anuncioo->ruc}}</h5>
						    		</div>

					    		</div>

					    		
					    		<div class="row" style="margin-bottom: 10px;">
						    		<div class="col-md-6">
										<h5 style="margin-top: 0px; margin-bottom: 0px;">Ciudad: {{$anuncioo->direccion}}</h5>
						    		</div>
						    		<div class="col-md-6">
										<h5 style="margin-top: 0px; margin-bottom: 0px;">Contacto: {{$anuncioo->contacto}}</h5>
						    		</div>

					    		</div>

					    	</div>
					    </div>
									    	
					    <div class="row color3">
					    	<h4 class="colorle1" style="margin-top: 8px; margin-bottom: 8px; padding-left: 10px;">DESCRIPCION DEL AVISO:</h4>
					    </div>
					    <section>
					    	<div class="row" style="margin-left: 0px;">
					    		<h3 class="colorle2" style="margin-left: 20px;">
					    			{{$anuncioo->titulo}}
					    		</h3>
					    	</div>
					    	<div class="row" style="margin-left: 0px; margin-left: 70px;">
					    		<div class="col-md-3">
					    		<h5 class="text-right" style="margin-bottom: 5px; margin-top: 5px;">Publicado:</h5>
					    			
					    		</div>
					    		<div class="col-md-9" style="padding-left: 0px;">
					    			<h5 class="text-left" style="margin-bottom: 5px; margin-top: 5px;">{{$anuncioo->created_at}}</h5>
					    		</div>
					    	</div>
					    	<div class="row" style="margin-left: 0px; margin-left: 70px;">
					    		<div class="col-md-3">
					    		<h5 class="text-right" style="margin-bottom: 5px; margin-top: 5px;">Area:</h5>
					    			
					    		</div>
					    		<div class="col-md-9" style="padding-left: 0px;">
					    			<h5 class="text-left" style="margin-bottom: 5px; margin-top: 5px;">{{$anuncioo->area}}</h5>
					    		</div>
					    	</div>
							<div class="row" style="margin-left: 0px; margin-left: 70px;">
					    		<div class="col-md-3">
					    		<h5 class="text-right" style="margin-bottom: 5px; margin-top: 5px;">Tipo de puesto:</h5>
					    			
					    		</div>
					    		<div class="col-md-9" style="padding-left: 0px;">
					    			<h5 class="text-left" style="margin-bottom: 5px; margin-top: 5px;">{{$anuncioo->tipo}}</h5>
					    		</div>
					    	</div>
							<div class="row" style="margin-left: 0px; margin-left: 70px;">
					    		<div class="col-md-3">
					    		<h5 class="text-right" style="margin-bottom: 5px; margin-top: 5px;">Salario:</h5>
					    			
					    		</div>
					    		<div class="col-md-9" style="padding-left: 0px;">
					    			<h5 class="text-left" style="margin-bottom: 5px; margin-top: 5px;">{{$anuncioo->salario}}</h5>
					    		</div>
					    	</div>
					    	<div class="row" style="margin-left: 70px; margin-bottom: 20px;">
					    		<div class="col-md-3">
					    		<h5 class="text-right" style="margin-bottom: 5px; margin-top: 5px;">Lugar de trabajo:</h5>
					    			
					    		</div>
					    		<div class="col-md-9" style="padding-left: 0px;">
					    			<h5 class="text-left" style="margin-bottom: 5px; margin-top: 5px;">{{$anuncioo->distrito}}</h5>
					    		</div>
					    	</div>
							
							<div class="row color3">
						    	<h4 class="colorle1" style="margin-top: 8px; margin-bottom: 8px; padding-left: 10px;">FUNCIONES:</h4>
						    </div>

					    	<div class="row" style="margin-left: 0px; margin-left: 40px;">
					    		<h4  style="margin-bottom: 15px; margin-top: 15px;">{{$anuncioo->funciones}}</h4>
					    	</div>

					    	<div class="row color3">
						    	<h4 class="colorle1" style="margin-top: 8px; margin-bottom: 8px; padding-left: 10px;">REQUISITOS:</h4>
						    </div>

					    	<div class="row" style="margin-left: 0px; margin-left: 40px;">
					    		<h4  style="margin-bottom: 15px; margin-top: 15px;">{{$anuncioo->caracteristicas}}</h4>
					    	</div>

					    </section>
					    <div class="row">
					    	<div class="col-md-9">
					    		
					    	</div>
					    	<div class="col-md-3">
					    		
							@if(Auth::User()->tipo == 'natural')

								<a  href="/estudiantes/postular/{{$anuncioo->id}}" class="btn btn-primary" role="button" style="margin-left: 10px; margin-right: 10px;">Postular</a>
							 @endif
							 @if(Auth::User()->tipo == 'organizacion')
							 <a href="/organizaciones/postulantes/{{$anuncioo->id}}" class="btn btn-primary" role="button" style="margin-left: 10px; margin-right: 10px;">Ver Postulantes</a>
							 @endif
					    	</div>
					    </div>
				    
				  </div>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="row">

				
					
				</div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis repudiandae esse quasi illo voluptatem assumenda ullam fuga rem quia. Deleniti saepe neque porro quae sequi sint pariatur magnam similique. Vero!
			</div>

		</div>

	</div>




<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</body>
</html>