@extends('esquemas.eaps')

@section('titulo')
Registrar EAP
@stop

@section('contenido')
	<div class="container">
		{{ Form::open(['action' => 'EapsController@store']) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre:') }}
			{{ Form::text('nombre', null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{ Form::label('codigo', 'Código:')}}
			{{ Form::text('codigo', null, ['class' => 'form-control']) }}
		</div>
			{{ Form::submit('Enviar', ['class' => 'btn btn-primary btn-lg']) }}
		{{ Form::close() }}
	</div>
@stop