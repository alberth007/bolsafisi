@extends('esquemas.eaps')

@section('titulo')
Registrar usuario
@stop

@section('contenido')

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
		margin: 60px auto;
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
	<div class="header color-pri">
		
			<h1 class="colorle" style="margin-top: 0px; padding-top: 15px;">BolsaFISI</h1>
		
	</div>
	<div class="row" >
		<div class="col-md-8">
			
		</div>
		<div class="col-md-4">
		
		<div class="jumbotron login" style="padding-top: 0px;">

			<div class="row color-pri" style="margin-left: 0px; margin-right: 0px; border-radius: 5px;">
				<h3 class="colorle text-center">Ingrese sus datos</h3>
			</div>
			<div class="container">
				<form action="{{ URL::action('UsuariosController@store')}}" method="POST" id="f1">
				<!-- {{ Form::open(['action' => 'UsuariosController@store']) }} -->
					
					<div class="form-group">
					    <label for="usuario" style="padding-top: 15px;">Usuario: </label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>	
						    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario">
						</div>
					    @if ($errors->has('usuario'))
						<p class="alert-danger">{{ $errors->first('usuario') }}</p>
						@endif
				  	</div>

					<div class="form-group">
						<label for="clave">Contraseña:</label>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
							<input type="password" class="form-control" id="clave" name="clave" placeholder="ingrese contraseña">
						</div>
						@if ($errors->has('clave'))
							@foreach($errors->get('clave') as $error)
							<p class="alert-danger">{{ $error }}</p>
							@endforeach
						@endif
					</div>

					<div class="form-group">
						<label for="clave_confirmation">Repertir la contraseña</label>
							<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>	
							<input type="password" class="form-control" id="clave_confirmation" name="clave_confirmation" placeholder="ingrese contraseña">

							</div>

					</div>

					<div class="form-group" >
						<div class="col-md-6">
						<label for="natural">Estudiante</label>
						<input type="radio" id="natural" name="tipo_usuario" value="natural">
							
						</div>
						<div class="col-md-6">
						<label for="organizacion">Organización</label>
						<input type="radio" id="organizacion" name="tipo_usuario" value="organizacion">
							
						</div>
					</div>

					<button type="submit" class="btn btn-primary form-control" style="margin-top: 10px;">Registrar</button>

				</form>
				
			</div>
		</div>
			
		</div>
	</div>


</body>

			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop