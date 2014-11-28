@extends('esquemas.eaps')

@section('titulo')
@stop

@section('contenido')
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Puesto</th>
					<th>Fecha de inicio</th>
					<th>Fecha de fin</th>
					<th>Empresa</th>
					<th>area</th>
					<th>descripcion</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($experiencias as $experiencia)
				<tr>
					<td>{{{ $experiencia->puesto }}}</td>
					<td>{{{ $experiencia->fecha_i }}}</td>
					<td>{{{ $experiencia->fecha_f }}}</td>
					<td>{{{ $experiencia->empresa_n }}}</td>
					<td>{{{ $experiencia->area }}}</td>
					<td>{{{ $experiencia->descripcion }}}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop