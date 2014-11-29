@extends('esquemas.eaps')

@section('titulo')
@stop

@section('contenido')
	<div class="container">
		<table class="table table-hover">
			
			<tbody>
				@foreach ($estudios as $estudio)
				<tr>
					<td>{{{ $estudio->estudio }}}</td>
					<td>{{{ $estudio->grado }}}</td>
					<td>{{{ $estudio->estado }}}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop