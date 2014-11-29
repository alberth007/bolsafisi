@extends('esquemas.eaps')

@section('titulo')
@stop

@section('contenido')
	<div class="container">
  				<table class="table table-hover">
                <thead>
				<tr>
			    	<td>estudio</td>
					<td>>grado</td>
					<td>estado</td>
				</tr>
			    </thead>
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