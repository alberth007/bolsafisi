<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<style>
	.vertical-container {
	  display: -webkit-flex;
	  display: flex;
	  height: 300px;
	}
	.vertically-centered {
	  margin: auto;
	}
	#mi-fondo{
		
		background-image: url('img/bienvenida.png');
		background-size: 100%;
		background-repeat: no-repeat;

	}
	.texto{ 
		font-family: ‘Metrophobic’, Arial, serif;
		 font-weight: 400; 
		}
	#transparente{
		background-color: transparent;
	}
	</style>
</head>
<body id="mi-fondo">
	<header class="header header-main" role="banner">
		
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
	                <li class="active"><a href="/principal">Inicio</a></li>
	                <li><a href="#">Acerca de</a></li>
	                <li><a href="#">Blog</a></li>
	                <li><a href="#">Contacto</a></li>
	            </ul>
	        </div>
	</nav>

	</header>

<div class="container">
	<div class="box">
		<div class="vertical-container">
			<div class="vertically-centered">

					<div class="col-md-8 col-md-offset-2">
					<h1 class="texto">
						BIENVENIDO
					</h1>
					<div class="row">
						<div class="col-md-6">
							<a href="/login" class="btn btn-primary" role="button" style="margin-left: 10px;margin-right: 10px;">Ingresa</a>
						</div>
						<div class="col-md-6">
							<a href="/usuarios/create" class="btn btn-primary" role="button" style="
    						margin-left: 10px;">Registrate</a>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

		
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body> 
</html>
			