@extends('esquemas.eaps')

@section('titulo')
Iniciar sesion
@stop

@section('contenido')

<!--  <-->
	<head>
		<style>
	
	#mi-fondo{
		
		background-image: url('img/bienvenida.png');
		background-size: 100%;
		background-repeat: no-repeat;

	}

	.login{
	
		box-shadow: 0px 4px 20px:;
		border-radius: 5px;
		margin: 120px auto;
		width: 320px;
		-webki-border-radius:10px;
		-moz-border-radius:10px;
	}

	.color-pri{
		background-color: #428bca;
	}
	.colorle{
		color: white;
	}
</style>

</head>

<body>

<header class="color-pri">
	
	<h1 class="colorle text-center" style="margin-top: 0px; margin-bottom: 0px; padding-top: 15px; padding-bottom: 15px;">
		Bienvenido
		</h1>
		
	
</header>

<div class="jumbotron login" style="margin-top: 120px; padding-top: 0px;">

<div class="container">
	
<form action="login" method="POST" id="f1">
	<div class="row color-pri" style="border-radius: 5px;">

	<h3 class="colorle text-center" >
 		Inicia sesion para continuar
	</h3>
		
	</div>
	<div class="form-group">
	    <label for="usuario" style="margin-top: 30px; margin-bottom: 10px;">
	    	Usuario: </label>
			
		<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	    	<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario" {{Input::old('usuario')}}>
		</div>
	   	@if ($errors->has('usuario'))
	   	<p class="alert-danger">{{ $errors->first('usuario') }}</p>
		@endif
  	</div>

	<div class="form-group">
		<label for="clave" style="margin-top: 10px; margin-bottom: 10px;">Contraseña:</label>
		
		<div class="input-group">
			<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
			<input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese su contraseña">
		</div>
		@if ($errors->has('clave'))
		<p class="alert-danger">{{ $errors->first('clave') }}</p>
		@endif

	</div>

	<button type="submit" class="form-control btn btn-primary" style="margin-top: 20px;">Iniciar</button>

</form>

	
</div>
	
</div>
	
		
</body>


			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop