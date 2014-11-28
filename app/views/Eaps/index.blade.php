@extends('esquemas.eaps')

@section('titulo')
Lista de EAPs
@stop

@section('contenido')
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Código</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($eaps as $eap)
				<tr>
					<td>{{{ $eap->nombre }}}</td>
					<td>{{{ $eap->codigo }}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop