@extends('esquemas.eaps')

@section('titulo')
Registrar Curriculum
@stop

@section('contenido')


<!-- {{ Form::open(['action' => 'UsuariosController@store']) }} -->

	
	<div class="panel panel-default">
		<div class="panel-heading">Idiomas</div>
		<div class="panel-body">
		  	<!-- <form action="{{ URL::action('RegistrosController@getRegistrarIdioma')}}" method="POST" id="f1"> -->
		  		<!-- {{$naturale->id}} -->
		  			<input type="hidden" id="natural"  value="{{$naturale->id}}">


		  		<div class="form-group">
				    <label for="idioma">Idioma: </label>
				    <input type="text" class="form-control" id="idioma" name="idioma" placeholder="Ingrese idioma">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>
  				<div class="form-group">
				    <label for="nivel">Nivel: </label>
				    <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Ingrese nombres">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				
		  		<button onclick="mostrar();" class="btn btn-primary">Agregar</button>
		  		
		<!--   	</form> -->
		</div>
		<div id="resultado">
		  		</div>
	</div>


<div class="panel panel-default">
		<div class="panel-heading">Estudios</div>
		<div class="panel-body">
		  	<!-- <form action="{{ URL::action('RegistrosController@getRegistrarIdioma')}}" method="POST" id="f1"> -->
		  		<!-- {{$naturale->id}} -->
		  			<input type="hidden" id="natural"  value="{{$naturale->id}}">


		  		<div class="form-group">
				    <label for="estudio">Estudio: </label>
				    <input type="text" class="form-control" id="estudio" name="estudio" placeholder="Ejemplo: curso de php">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>
  				<div class="form-group">
				    <label for="grado">Grado (opcional) : </label>
				    <input type="text" class="form-control" id="grado" name="grado" placeholder="Ejemplo: de actualizacion, tecnico, etc.">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				<div class="form-group">
					<label for="estado">Estado: </label>
					<select name="estado" id="estado">
						<option value="null">Seleccione</option>
							<option value="en curso">En curso</option>
							<option value="trunco">Trunco</option>
							<option value="terminado">Terminado</option>
					</select>
		<!-- <input type="text" class="form-control" id="eap" name="eap" placeholder="Ingrese nro de eap "> -->
				</div>

  				
		  		<button onclick="mostrar2();" class="btn btn-primary">Agregar</button>
		  		
		<!--   	</form> -->
		</div>
		<div id="resultado2">
		  		</div>
	</div>


<div class="panel panel-default">
		<div class="panel-heading">Experiencias</div>
		<div class="panel-body">
		  	<!-- <form action="{{ URL::action('RegistrosController@getRegistrarIdioma')}}" method="POST" id="f1"> -->
		  		<!-- {{$naturale->id}} -->
		  			<input type="hidden" id="natural"  value="{{$naturale->id}}">


		  		<div class="form-group">
				    <label for="puesto">Puesto: </label>
				    <input type="text" class="form-control" id="puesto" name="puesto" placeholder="Ejemplo: analista">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>
  				<div class="form-group">
				    <label for="fecha_ini">Fecha de inicio : </label>
				    <input type="date" class="form-control" id="fecha_ini" name="fecha_ini" >
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				<div class="form-group">
				    <label for="fecha_fin">Fecha de termino : </label>
				    <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" >
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				<div class="form-group">
				    <label for="empresa">Empresa: </label>
				    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Ejemplo: UNMSM">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				<div class="form-group">
				    <label for="area">Area: </label>
				    <input type="text" class="form-control" id="area" name="area" placeholder="Ejemplo: area de conectividad">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>

  				<div class="form-group">
				    <label for="descripcion">Descripcion: </label>
				    <input type="textArea" class="form-control" id="descripcion" name="descripcion" placeholder="Describa lo que hacia en su empleo aquí.">
				    <!-- @if ($errors->has('usuario'))
					<p class="alert-danger">{{ $errors->first('usuario') }}</p>
					@endif -->
  				</div>		
		  		<button onclick="mostrar3();" class="btn btn-primary">Agregar</button>
		  		
		<!--   	</form> -->
		</div>
		<div id="resultado3">
		  		</div>
	</div>


	
		<a href="/estudiantes/principal" class="btn btn-primary" role="button" style="margin-left: 10px;
 margin-right: 10px;">Finalizar</a>

	

			<!-- {{ Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg']) }}
{{ Form::close() }}
	 -->
@stop