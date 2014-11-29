@extends('esquemas.eaps')

@section('titulo')
@stop

@section('contenido')
	<div class="container">
		<table class="table table-hover">
			
			<tbody>
				@foreach ($idiomas as $idioma)
				<tr>
					<td>{{{ $idioma->nombre }}}</td>
					<td>{{{ $idioma->nivel }}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop