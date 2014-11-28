<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu principal Estudiante</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user scalable=no">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
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
	</style>

</head>
<body>

@foreach($personaorgaviso as $postu)
	<p>{{$postu->nombre}}</p>
	<p>{{$postu->rubro}}</p>
	<p>{{$postu->titulo}}</p>
	<p>{{$postu->estado}}</p>
	<p>--------------------</p>
@endforeach



</body>
</html>