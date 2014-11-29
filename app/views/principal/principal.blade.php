<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu principal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user scalable=no">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
	#color1{
		background-color: white;
	}
	#fondo-natural{
		background-color: #F5F5F5;
	}
	</style>

</head>
<body id="fondo-natural">
	
	<nav role="navigation" class="navbar navbar-inverse" style="margin-bottom: 0px;">
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
	                <li class="active"><a href="#">Inicio</a></li>
	                <li><a href="#">Acerca de</a></li>
	                <li><a href="#">Blog</a></li>
	                <li><a href="#">Contacto</a></li>
	            </ul>
	            <div class="row">
		           	<a href="/login" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Inicia Sesion</a>
		           	<a href="/usuarios/create" class="btn btn-success navbar-btn navbar-right" role="button">Registrate</a>
	        	</div>
	        </div>
	</nav>
		
		<div class="container">
	
		
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
    	{{ HTML::image('img/im1.jpg') }}
   
      <div class="carousel-caption">
      <h3>Los mejores anuncios</h3>
      <p>descripcion</p>
      </div>
    </div>
    <div class="item">
    	{{ HTML::image('img/im2.jpg') }}
      
      <div class="carousel-caption">
       <h3>En la mejor plataforma</h3>
      <p>descripcion</p>
      </div>
    </div>
    
      <div class="item">
    	{{ HTML::image('img/im3.jpg') }}
      
      <div class="carousel-caption">
       <h3>En la mejor plataforma</h3>
      <p>descripcion</p>
      </div>
    </div>
    
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</div>
<!-- termina el carrousel -->
<!-- hago un sistema de grillas -->
		<div id="color1" class="container ">
			<section>
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div>
						</div>
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
					<div class="col-lg-8" >
						
						<div class="row color1" style="margin-top: 10px; margin-bottom: 10px; margin-right: 0px;">
							<h2 class="color1" style="padding-left: 20px;">AVISOS DESTACADOS</h2>
						</div>
						<div class="row colorle1" style="margin-right: 0px; margin-left: -30px;">
							@foreach ($personaorganuncio as $anuncio)
							<div class="panel panel-default">
							  <div class="panel-body">
							    
								<div class="col-lg-4">
											<div >
									   <div class="thumbnail">
									      <img src="img5.jpg" alt="imagen">
									      <div class="caption">
									              <p>{{$anuncio->titulo}}</p>
									              <p>{{$anuncio->nombre}}</p>
									              <p>{{$anuncio->rubro}}</p>
									      </div>
									   </div>

									</div>
								</div>

								<div class="col-lg-8">
									<h3>{{$anuncio->area}}</h3>
								</div>

							  </div>
							</div>
							@endforeach

							
						</div>
						
						
		
						
					</div>
				</div>
			</section>
			

		</div>

		


	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>

