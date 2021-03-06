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
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
<!--meta property="og:title" content="Timbradores Anónimos" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://timbradoresanonimos.com/" />
<meta property="og:image" content="http://timbradoresanonimos.com/images/img-entel.png" />
<meta property="og:site_name" content="Timbradores Anónimos" />
<meta property="og:description" content="Descubre qué grado de timbrador eres y qué puedes hacer para remediarlo. Responde nuestro test y recibe tu diagnóstico." />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="https://twitter.com/EntelPeru" />
<meta name="twitter:description" content="Descubre qué grado de timbrador eres y qué puedes hacer para remediarlo. Responde nuestro test y recibe tu diagnóstico. " /-->
</head><!--/head-->
<body>
</body>
	<header>
		<div class="container">
			<div class="col-sm-6 home">
				<span>home</span>
			</div>
			<div class="col-sm-6 redes">
				<section>
					<img src="images/adidas.png" alt="adidas"/>
					<span>concurso</span>
					<a href="#" target="_blank"><img src="images/facebook.jpg" alt="facebook"/></a>
					<a href="#" target="_blank"><img src="images/twitter.jpg" alt="twitter"/></a>
					<a href="#" target="_blank"><img src="images/instagram.jpg" alt="instagram"/></a>
					<a href="#" target="_blank"><img src="images/youtube.jpg" alt="youtube"/></a>
					<a href="#" target="_blank"><img src="images/pinterest.jpg" alt="pinterest"/></a>
				</section>
			</div>
		</div>
	</header>
	<section id="container-registro" class="container-fluid">
		<div class="row">
			<div class="col-sm-6 content-deportes-1">
				
			</div>
			<div class="col-sm-4 registro-content">
				<div class="col-sm-12">
					<img src="images/frase.png" alt="facebook" class="img-responsive frase" />
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
						   <input class="col-sm-3" type="number" name="telefono" id="telefono" required value="{{Input::old('telefono')}}" class="{{$errors->has('telefono') ? 'error' : ''}}" maxlength="50">
						   <label class="col-sm-1 dni"> dni:  </label>
						   <input class="col-sm-4" type="number" name="dni" id="dni" required value="{{Input::old('dni')}}" class="{{$errors->has('dni') ? 'error' : ''}}" maxlength="8">
						</div>
						<div class="container-inputs clearfix">
						   <label class="col-sm-4">mail: </label>
						   <input class="col-sm-8" type="email" name="email" id="email" required value="{{Input::old('email')}}" class="{{$errors->has('email') ? 'error' : ''}}" maxlength="100">
						</div>
						<div class="container-inputs clearfix">
						   <label class="col-sm-4">distrito:  </label>
						   <select class="col-sm-8" name="distrito" id="distrito" required value="{{Select::old('distrito')}}" class="{{$errors->has('distrito') ? 'error' : ''}}">
						   		<option value="Lima Cercado">Lima Cercado</option>
								<option value="Lima Cercado">Ancón
								<option value="Lima Cercado"><option value="Lima Cercado">Ate
								<option value="Lima Cercado">Barranco</option>
								<option value="Lima Cercado">Breña</option>
								<option value="Lima Cercado">Carabayllo</option>
								<option value="Lima Cercado">Chaclacayo</option>
								<option value="Lima Cercado">Chorrillos</option>
								<option value="Lima Cercado">Cieneguilla</option>
								<option value="Lima Cercado">Comas</option>
								<option value="Lima Cercado">El Agustino</option>
								<option value="Lima Cercado">Independencia</option>
								<option value="Lima Cercado">Jesús María</option>
								<option value="Lima Cercado">La Molina</option>
								<option value="Lima Cercado">La Victoria</option>
								<option value="Lima Cercado">Lince</option>
								<option value="Lima Cercado">Los Olivos</option>
								<option value="Lima Cercado">Lurigancho-Chosica</option>
								<option value="Lima Cercado">Lurin</option>
								<option value="Lima Cercado">Magdalena del Mar</option>
								<option value="Lima Cercado">Pueblo Libre</option>
								<option value="Lima Cercado">Miraflores</option>
								<option value="Lima Cercado">Pachacámac</option>
								<option value="Lima Cercado">Pucusana</option>
								<option value="Lima Cercado">Puente Piedra</option>
								<option value="Lima Cercado">Punta Hermosa</option>
								<option value="Lima Cercado">Punta Negra</option>
								<option value="Lima Cercado">Rímac</option>
								<option value="Lima Cercado">San Bartolo</option>
								<option value="Lima Cercado">San Borja</option>
								<option value="Lima Cercado">San Isidro</option>
								<option value="Lima Cercado">San Juan de Lurigancho</option>
								<option value="Lima Cercado">San Juan de Miraflores</option>
								<option value="Lima Cercado">San Luis</option>
								<option value="Lima Cercado">San Martín de Porres</option>
								<option value="Lima Cercado">San Miguel</option>
								<option value="Lima Cercado">Santa Anita</option>
								<option value="Lima Cercado">Santa María del Mar</option>
								<option value="Lima Cercado">Santa Rosa</option>
								<option value="Lima Cercado">Santiago de Surco</option>
								<option value="Lima Cercado">Surquillo</option>
								<option value="Lima Cercado">Villa El Salvador</option>
								<option value="Lima Cercado">Villa María del Triunfo</option>
						   </select>
						</div>
						<div class="container-inputs clearfix">
						   <label class="col-sm-4">código suscripcion </label>
						   <input class="col-sm-8" type="number" name="codigo" id="codigo" required value="{{Input::old('codigo')}}" class="{{$errors->has('codigo') ? 'error' : ''}}" maxlength="13">
						</div>
						<div class="container-inputs clearfix">
						   <div class="col-sm-4 codigo"> *encuentra tu código al final  de tu ticket de compra</div>
						   <div class="col-sm-8 informacion"><label>Deseo recibir información de Ripley</label><input type="checkbox" name="newsletter" id="newsletter" /></div>
						</div>
					   <input type="image" src="images/btn-enviar.png" value="enviar" id="enviar">
					  </form>
				</div>

			</div>
			<div class="col-sm-2 content-deportes-2">

			</div>
		</div>
	</section>
	<section id="container-premios">

	</section>
	<footer>
		<div class="container">
			<div class="col-sm-10">
				<span><img src="images/terminos.jpg" alt="terminos" /></span>
			</div>
			<div class="col-sm-2">
				<img src="images/ripley-logo.jpg" alt="ripley" class="img-responsive"/>
		</div>
		</div>
	</footer>

</html>