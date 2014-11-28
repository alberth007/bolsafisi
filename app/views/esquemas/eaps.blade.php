<!DOCTYPE html>
<html>
<head>


<style>
.mensaje {
  position: absolute;
  bottom: 20px;
  left: 20px;
}
</style>

	<meta charset="UTF-8" />
	<title>@yield('titulo')</title>
	{{ HTML::style('css/bootstrap.css') }}
  {{ HTML::script('js/ajax.js') }}
</head>
<body>
	@yield('contenido')

  @if(Session::has('mensaje'))
  <p class="alert {{ 'alert-' . Session::get('tipo') }} mensaje">{{ Session::get('mensaje') }}</p>
  @endif
	{{ HTML::script('js/jquery-2.1.1.min.js') }}
</body>
</html>