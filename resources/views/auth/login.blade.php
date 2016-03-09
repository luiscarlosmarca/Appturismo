<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lo mejores Hoteles | Turistiando en Pto Salgar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="style/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
							<h1>Turistiando en Pto  Salgar</h1>
							<p>Secretaria de turismo - Alcaldia municipal.</p>
						</header>
					
						<hr />
						<h2>Iniciar sesión</h2>
						@if (count($errors) > 0)
						<div class="alert alert-danger">
					<font color="red">Por favor corrige los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					</font>
					<form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-mail:</label>
							<div class="col-md-6">
							    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña:</label>
							<div class="col-md-6">
						    	{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<br>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Ingresar
								</button>

								<a href="/password/email">Olvidaste la contraseña</a>
							</div>
						</div>
					</form>
						<hr />
						-->
						<footer>
							<div class="alert alert-info" role="alert">
							<ul class="icons">
								<li><a href="/" class="fa-home"> Volver al inicio </a></li>
								<li><a href="{{route('registro')}}" class="fa-user"> Crear Cuenta</a></li>
							</div>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Secretaria de Turismo </li>
							<li>Pto Salgar - Cundinamarca </a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>