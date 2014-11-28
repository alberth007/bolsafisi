@extends('esquemas.eaps')

@section('titulo')
Registrar estudiante
@stop

@section('contenido')

<form action="{{ URL::action('RegistronaturalesController@store')}}" method="POST" id="f1">

<!-- {{ Form::open(['action' => 'UsuariosController@store']) }} -->
	
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
</form>
			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop