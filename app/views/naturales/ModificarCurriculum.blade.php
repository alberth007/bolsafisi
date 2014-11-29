<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Curriculum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user scalable=no">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/estilos.css') }}
	{{ HTML::script('js/ajax.js') }}
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	
	<style>
	.color2{
  	background-color: orange; 
	}
	.color1{
		background-color: blue;
	}
	#fondo-natural{
		background-color: #F5F5F5;
	}
	</style>

</head>
<body id="fondo-natural">

<nav role="navigation" class="navbar navbar-inverse">
	        <div class="navbar-header">
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand">Logotipo</a>
	        </div>

	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	               	<li><a href="/estudiantes/principal">Inicio</a></li>
	                <li class="active"><a href="#">Modificar datos</a></li>
	                <li><a href="/estudiantes/postulaciones">Mis postulaciones</a></li>
	                
	            </ul>
	            @if(!Auth::check())
	            <div class="row">
		           	<a href="/login" class="btn btn-primary navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Inicia Sesion</a>
		           	<a href="/usuarios/create" class="btn btn-primary navbar-btn navbar-right" role="button">Registrate</a>
	        	</div>
	        	@endif
	        	@if(Auth::check())
	        		<a href="/principal" class="btn btn-success navbar-btn navbar-right" role="button" style="margin-left: 10px;
 margin-right: 10px;">Cerrar Sesion</a>
	        </div>
	        @endif
	</nav>
	
	<div class="container">
	   <div class="panel panel-primary">
			<div class="panel-heading">
			    <h3 class="panel-title">Datos de curriculum</h3>
			</div>
			<div class="panel-body">
	            <div class="panel panel-primary">
            		<div class="panel-heading">Idiomas</div>
            		<div class="panel-body">
		  	
                        <Input type="hidden" id="natural" value="{{$persona_id}}">
    
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
    
                		<table class="table table-hover">
                			<thead>
                				<tr>
                					<th>Nombre</th>
                					<th>Nivel</th>
                				</tr>
                			</thead>
                			<tbody>
                				@foreach ($idiomas as $idioma)
                				<tr>
                					<td>{{{ $idioma->nombre }}}</td>
                					<td>{{{ $idioma->nivel }}}</td>
                					
                				</tr>
                				@endforeach
                			
                			</tbody>
                		</table>
    		  		    <button onclick="mostrar();" class="btn btn-primary">Agregar</button>
	            	</div>
	
		  		</div>
	       
	
	<div class="panel panel-primary">
		<div class="panel-heading">Estudios</div>
		<div class="panel-body">
		  
		  			<input type="hidden" id="natural"  value="{{$persona_id}}">


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
				<table class="table table-hover">
                <thead>
				<tr>
					<th>Estudio</th>
					<th>Grado</th>
					<th>Estado</th>
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
  				
		  		<button onclick="mostrar2();" class="btn btn-primary">Agregar</button>
		  		
		<!--   	</form> -->
		</div>
		
		  		</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">Experiencias</div>
		<div class="panel-body">
		  	
		  			<input type="hidden" id="natural"  value="{{$persona_id}}">


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
		  		<button onclick="mostrar3();" class="btn btn-primary">Agregar</button>
		  		
		<!--   	</form> -->
		</div>
    </div>

	<a href="/estudiantes/principal" class="btn btn-primary" role="button" style="margin-left: 10px;
 margin-right: 10px;">Finalizar</a>
 </div>
 </div>
 </div>
		{{ HTML::script('js/jquery-2.1.1.min.js') }}
</body>
</html>