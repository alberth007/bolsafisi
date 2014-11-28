@extends('esquemas.eaps')

@section('titulo')
Iniciar sesion
@stop

@section('contenido')

<!--  -->
<form action="login" method="POST" id="f1">

	<h3>Bienvenido</h3>
	<h3>Inicia sesion para continuar</h3>
	<div class="form-group">
	    <label for="usuario">Usuario: </label>
	    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario" {{Input::old('usuario')}}>
	   	@if ($errors->has('usuario'))
		<p class="alert-danger">{{ $errors->first('usuario') }}</p>
		@endif
  	</div>

	<div class="form-group">
		<label for="clave">Contraseña:</label>
		<input type="password" class="form-control" id="clave" name="clave">
		@if ($errors->has('clave'))
		<p class="alert-danger">{{ $errors->first('clave') }}</p>
		@endif
	</div>

	<button type="submit" class="btn btn-primary">Iniciar</button>

</form>
			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop