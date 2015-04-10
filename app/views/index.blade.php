<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--title-->
		<title>Ripley Deportes</title>

		<!--CSS-->
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">

		<link rel="shortcut icon" href="{{url()}}/favicon.ico">
		<script type="text/javascript" src="{{url()}}/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="{{url()}}/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="{{url()}}/js/jquery.screwdefaultbuttonsV2.min.js"></script>
		<script type="text/javascript" src="{{url()}}/js/funciones.js"></script>
		<!--meta property="og:title" content="Timbradores Anónimos" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://timbradoresanonimos.com/" />
		<meta property="og:image" content="http://timbradoresanonimos.com/images/img-entel.png" />
		<meta property="og:site_name" content="Timbradores Anónimos" />
		<meta property="og:description" content="Descubre qué grado de timbrador eres y qué puedes hacer para remediarlo. Responde nuestro test y recibe tu diagnóstico." />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="https://twitter.com/EntelPeru" />
		<meta name="twitter:description" content="Descubre qué grado de timbrador eres y qué puedes hacer para remediarlo. Responde nuestro test y recibe tu diagnóstico. " /-->
	</head>
	<body>
		<header>
			<div class="container">
				<div class="col-sm-6 home">
					<span>home</span>
				</div>
				<div class="col-sm-6 redes">
					<section>
						<img src="{{url()}}/images/adidas.png" alt="adidas"/>
						<span>concurso</span>
						<a href="#" target="_blank"><img src="{{url()}}/images/facebook.jpg" alt="facebook"/></a>
						<a href="#" target="_blank"><img src="{{url()}}/images/twitter.jpg" alt="twitter"/></a>
						<a href="#" target="_blank"><img src="{{url()}}/images/instagram.jpg" alt="instagram"/></a>
						<a href="#" target="_blank"><img src="{{url()}}/images/youtube.jpg" alt="youtube"/></a>
						<a href="#" target="_blank"><img src="{{url()}}/images/pinterest.jpg" alt="pinterest"/></a>
					</section>
				</div>
			</div>
		</header>
		<section id="container-registro" class="container-fluid none">
			<div class="row">
				<div class="col-sm-6 content-deportes-1 columnas-deportes">

				</div>
				<div class="col-sm-4 registro-content">
					<div class="col-sm-12">
						<img src="{{url()}}/images/frase.png" alt="facebook" class="img-responsive frase" />
						<form action="#" id="registro" name="registro">
							<div class="container-inputs clearfix">
								<label class="col-sm-4">nombres:</label>
								<input class="col-sm-8"  type="text" name="nombres" id="nombres" required value="{{Input::old('nombres')}}" class="{{$errors->has('nombres') ? 'error' : ''}}" maxlength="50">
							</div>
							<div class="container-inputs clearfix">
								<label class="col-sm-4">apellidos:</label>
								<input class="col-sm-8" type="text" name="apellidos" id="apellidos" required value="{{Input::old('apellidos')}}" class="{{$errors->has('apellidos') ? 'error' : ''}}" maxlength="50">
							</div>
							<div class="container-inputs clearfix">
								<label class="col-sm-4"> teléfono/celular:</label>
								<input class="col-sm-3" type="tel" name="telefono" id="telefono" required value="{{Input::old('telefono')}}" class="{{$errors->has('telefono') ? 'error' : ''}}" maxlength="50">
								<label class="col-sm-1 dni"> dni:  </label>
								<input class="col-sm-4" type="number" name="dni" id="dni" required value="{{Input::old('dni')}}" class="{{$errors->has('dni') ? 'error' : ''}}" maxlength="8">
							</div>
							<div class="container-inputs clearfix">
								<label class="col-sm-4">mail: </label>
								<input class="col-sm-8" type="email" name="email" id="email" required value="{{Input::old('email')}}" class="{{$errors->has('email') ? 'error' : ''}}" maxlength="100">
							</div>
							<div class="container-inputs clearfix">
								<label class="col-sm-4">D /P /distrito  </label>
								<div class="col-sm-8 selects">
									<div class="col-sm-4 selects">
										<select name="departamento" id="departamento">
											<option value="0">Departamento</option>
@foreach ($departamentos as $departamento)
<option value="{{$departamento['id']}}">{{ucwords(strtolower($departamento['departamento']))}}</option>
@endforeach
										</select>
									</div>
									<div class="col-sm-4 selects">
										<select name="provincia" id="provincia">
											<option value="0">Provincia</option>
										</select>
									</div>
									<div class="col-sm-4 selects">
										<select name="distrito" id="distrito">
											<option value="0">Distrito</option>
										</select>
									</div>
								</div>
								<div class="container-inputs clearfix">
									<label class="col-sm-4">código suscripcion </label>
									<input class="col-sm-8" type="number" name="codigo" id="codigo" required value="{{Input::old('codigo')}}" class="{{$errors->has('codigo') ? 'error' : ''}}" maxlength="13">
								</div>
								<div class="container-inputs clearfix">
									<div class="col-sm-4 codigo"> *encuentra tu código al final  de tu ticket de compra</div>
									<div class="col-sm-8 informacion"><label>Deseo recibir información de Ripley</label><input type="checkbox" name="newsletter" id="newsletter" /></div>
								</div>
								<input type="image" src="{{url()}}/images/btn-enviar.png" value="enviar" id="enviar" class="btn-enviar">
							</form>
						</div>

					</div>
					<div class="col-sm-5 content-deportes-2 columnas-deportes">

					</div>
				</div>
			</div>
		</section>
		<section id="container-premios">
			
		</section>
		<footer>
			<div class="container">
				<div class="col-sm-10">
					<span><img src="{{url()}}/images/terminos.jpg" alt="terminos" /></span>
				</div>
				<div class="col-sm-2">
					<img src="{{url()}}/images/ripley-logo.jpg" alt="ripley" class="img-responsive"/>
				</div>
			</div>
		</footer>
		<script>
			$(document).ready(function () {
				$('#enviar').click(function (e) {
					e.preventDefault();
					$.ajax({
						url: '{{url()}}/registro',
						data: $('#registro').serialize(),
						error: function () {
							console.log('error');
						},
						dataType: 'json',
						success: function (data) {
							if (data.success == 'error') {
								console.log(data);
							} else {
								console.log('ok');
							}
						},
						type: 'POST'
					});
				});
				$('#departamento').change(function() {
					var id;
					id = $(this).val();
					$.ajax({
						url: '{{url()}}/getProvincias',
						data: 'id='+id,
						error: function () {
							console.log('error');
						},
						dataType: 'json',
						success: function(data) {
							var html;
							$.each(data, function(i, item) {
								html += '<option value="' + item.id + '">' + item.provincia + '</option>';
							});
							$('#provincia').html(html);
						},
						type: 'POST'
					});
				});
			});
		</script>
	</body>
</html>