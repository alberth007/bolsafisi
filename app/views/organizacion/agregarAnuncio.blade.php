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
	                <li class="active"><a href="#">Crear un anuncio</a></li>
	                <li><a href="/organizaciones/misAnuncios" >Mis Anuncios</a></li>
	                
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

<form action="{{ URL::action('OrganizacionesController@store')}}" method="POST" id="f1">
<!-- {{ Form::open(['action' => 'UsuariosController@store']) }} -->
<div class="container">	
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Datos del Anuncio</h3>
			</div>
			<div class="panel-body">
	
	<div class="form-group">
	    <label for="titulo">Titulo del anuncio: </label>
	    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ejemplo: Practicas pre  en XXXX">
	    <!-- @if ($errors->has('usuario'))
		<p class="alert-danger">{{ $errors->first('usuario') }}</p>
		@endif -->
  	</div>

	<div class="form-group">
		<label for="area">Area: </label>
		<select name="area">
			<option value="null">Seleccione</option>
			
				<option value="administracion">Administracio</option>
				<option value="banca">Banca</option>
				<option value="AtencionalCliente">Atencion al Cliente</option>
				<option value="comercial">comercial</option>
				<option value="logistica">logistica</option>
				<option value="contabilidad y finanzas">contabilidad y finanzas</option>
				<option value="ingenieria">ingenieria</option>
				<option value="hoteleria y turismo">hoteleria y turismo</option>
				<option value="legal">lehal</option>
				<option value="marketing y publicidad">marketing y publicidad</option>
				<option value="mantenimiento y soporte">mantenimiento y soporte</option>
				<option value="recursos humanos">recursos humanos</option>
				<option value="sistemas">sistemas</option>
				<option value="ventas">ventas</option>			
		</select>
		<!-- <input type="text" class="form-control" id="eap" name="eap" placeholder="Ingrese nro de eap "> -->
	</div>

	<div class="form-group">
		<label for="funciones">Funciones: </label>
		<textarea  class="form-control" rows="3" id="funciones" name="funciones" placeholder="Ingrese las funciones que se realizaran en el trabajo"></textarea>
	</div>

	<div class="form-group">
		<label for="caracteristicas">Requisitos: </label>
		<textarea  class="form-control" rows="3" id="caracteristicas" name="caracteristicas" placeholder="Ingrese los requisitos necesrios para el puesto. Ejemplo: conocimientos en XXX"></textarea>
	</div>

	<div class="form-group">
		<fieldset disabled>
		<label for="departamento">Departamento: </label>
		<input type="text" id="departamento" name="departamento" class="form-control" placeholder="Lima" value="lima">
		<!-- @if ($errors->has('clave'))
			@foreach($errors->get('clave') as $error)
			<p class="alert-danger">{{ $error }}</p>
			@endforeach
		@endif -->
		</fieldset>
	</div>


	<div class="form-group">
		<label for="provincia">Provincia: </label>
		<input type="text" class="form-control" id="provincia" name="provincia" placeholder="LIMA FIJO">
		<!-- @if ($errors->has('clave'))
			@foreach($errors->get('clave') as $error)
			<p class="alert-danger">{{ $error }}</p>
			@endforeach
		@endif -->
	</div>

	<div class="form-group">
		<label for="distrito">Distrito: </label>
		<select name="distrito">
			<option value="null">Seleccione</option>
			
				<option value="cercado de lima">cercado de lima</option>
				<option value="ate">ate</option>
				<option value="barranco">Barranco</option>
				<option value="breña">breña</option>
				<option value="comas">comas</option>
				<option value="chorrillos">chorrillos</option>
				<option value="el agustino">el agustino</option>
				<option value="jesus maria">jesus maria</option>
				<option value="la molina">la molina</option>
				<option value="la victoria">la victoria</option>
				<option value="lince">lince</option>
				<option value="magdalena del mar">magdalena del mar</option>
				<option value="miraflores">miraflores</option>
				<option value="pueblo libre">pueblo libre</option>
				<option value="puente piedra">puente piedra</option>
				<option value="rimac">rimac</option>
				<option value="san isidro">san isidro</option>
				<option value="independencia">independencia</option>
				<option value="san juan de miraflores">san juan de miraflores</option>
				<option value="san luis">san luis</option>
				<option value="san martin de porres">san matin de porres</option>
				<option value="san miguel">san miguel</option>
				<option value="santiago de surco">santiago de surco</option>
				<option value="surquillo">surquillo</option>
				<option value="villa maria del triunfo">villa maria dle trinfo</option>
				<option value="san juan de lurigancho">san juan de lurigancho</option>
				<option value="santa rosa">santa rosa</option>
				<option value="los olivos">los olivos</option>
				<option value="san borja">san borja</option>
				<option value="villa el salvador">villa el salvador</option>
				<option value="santa anita">santa anita</option>
						
		</select>
		<!-- <input type="text" class="form-control" id="eap" name="eap" placeholder="Ingrese nro de eap "> -->
	</div>


	<div class="form-group">
		<label for="salario">Salario: </label>
		<input type="text" class="form-control" id="salario" name="salario" placeholder="Ingrese salario">
	</div>

	<div class="form-group">
		<label for="tipo">Tipo: </label>
		<input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingrese tipo">
	</div>


	<div class="form-group">
		<label for="fecha_limite">Fecha limite de postulaciones: </label>
		<input type="date" class="form-control" id="fecha_limite" name="fecha_limite" placeholder="Ingrese nombre del contacto">
	</div>

	<button type="submit" class="btn btn-primary">Publicar Aviso</button>

		</div>
</div>

</div>
</form>
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