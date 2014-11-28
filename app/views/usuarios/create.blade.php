@extends('esquemas.eaps')

@section('titulo')
Registrar usuario
@stop

@section('contenido')

<form action="{{ URL::action('UsuariosController@store')}}" method="POST" id="f1">
<!-- {{ Form::open(['action' => 'UsuariosController@store']) }} -->
	
	<div class="form-group">
	    <label for="usuario">Usuario: </label>
	    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario">
	    @if ($errors->has('usuario'))
		<p class="alert-danger">{{ $errors->first('usuario') }}</p>
		@endif
  	</div>

	<div class="form-group">
		<label for="clave">Contraseña:</label>
		<input type="password" class="form-control" id="clave" name="clave">
		@if ($errors->has('clave'))
			@foreach($errors->get('clave') as $error)
			<p class="alert-danger">{{ $error }}</p>
			@endforeach
		@endif
	</div>

	<div class="form-group">
		<label for="clave_confirmation">Repertir la contraseña</label>
		<input type="password" class="form-control" id="clave_confirmation" name="clave_confirmation">
	</div>

	<div class="form-group">
		<label for="natural">Estudiante</label>
		<input type="radio" id="natural" name="tipo_usuario" value="natural">
		<label for="organizacion">Organización</label>
		<input type="radio" id="organizacion" name="tipo_usuario" value="organizacion">
	</div>

	<button type="submit" class="btn btn-primary">Registrar</button>

</form>
			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop