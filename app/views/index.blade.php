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
		<script type="text/javascript" src="{{url()}}/js/scrollIt.min.js"></script>
		<script type="text/javascript" src="{{url()}}/js/funciones.js?ver=1.10"></script>
		<script>
var urlBase = '{{url()}}';
		</script>
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 home col-xs-3">
						<a data-scroll-nav="0">home</a>
					</div>
					<div class="col-sm-6 redes col-xs-9">
						<section>
							<img src="{{url()}}/images/adidas.png" alt="adidas"/>
							<a class="concurso" data-scroll-nav="1">concurso</a>
							<a href="#" target="_blank" class="iconos-redes"><img src="{{url()}}/images/facebook.jpg" alt="facebook"/></a>
							<a href="#" target="_blank" class="iconos-redes"><img src="{{url()}}/images/twitter.jpg" alt="twitter"/></a>
							<a href="#" target="_blank" class="iconos-redes"><img src="{{url()}}/images/instagram.jpg" alt="instagram"/></a>
							<a href="#" target="_blank" class="iconos-redes"><img src="{{url()}}/images/youtube.jpg" alt="youtube"/></a>
							<a href="#" target="_blank" class="iconos-redes"><img src="{{url()}}/images/pinterest.jpg" alt="pinterest"/></a>
						</section>
					</div>
				</div>
			</div>
		</header>
		<div class="layer-terminos-gracias none" id="gracias--layer">
			<div class="content-a">
				<div class="content-b">
					<div class="container-fluid">
						<div class="col-sm-6 col-sm-offset-3">
							<img src="images/gracias.png" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="layer-terminos-gracias none" id="terminos-layer">
			<div class="content-a">
				<div class="content-b">
					<div class="container-fluid">
						<div class="col-sm-6 col-sm-offset-3">
							.C.E.A. Máxima 149.59%. Ejemplo: Cálculo referencial efectuado con la tasa máxima según tarifario y considerando un consumo total de S/. 1,000 a 12 meses. Si mantuviera saldo de S/. 10 o más en su tarjeta de crédito, se le cargará S/. 5.90 mensual por concepto de seguro de desgravamen. En caso corresponda, aplicará una comisión mensual por envío físico de estado de cuenta de S/. 6.90. En caso de incumplimiento en el pago, aplicará penalidad por pago fuera de fecha según tarifario vigente. I.T.F (0.005%). (*)Si usted opta realizar su compra en cuotas, el valor final de las mismas podría variar en función a la fecha de desembolso, facturación y pago del cliente. Mayor información de condiciones, restricciones y tarifas en www.bancoripley.com.pe y/o Agencias ubicadas dentro de las Tiendas Ripley. Condiciones: Promoción valida del 11/04/15 al 03/05/15 y/o agotar stock. Stock mínimo 3 unidades. Fotos referenciales. No acumulables con otras promociones. Válido sólo para consumo familiar (máx. 3 productos por cliente o tarjeta). Productos ahora o nunca son exclusivos con Tarjeta Ripley. No aplica para compras en Tienda Virtual Ripley. RD N° 0998-2015–ONAGI–DGAE–DA de “PROMOCIÓN ADIDAS– VANNA COACH”, para mayor información ingresa a www.reto42klima.com; y RD N° 1044-2015–ONAGI–DGAE–DA de “PROMOCIÓN POWERADE REVISTA DEPORTES ABRIL”, para mayor información ingresa a www.ripley.com.pe
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="container-registro" class="container-fluid" data-scroll-index="0">


			<div class="row">

				<div class="col-sm-6 content-deportes-1 columnas-deportes">

				</div>
				<div class="col-sm-6">
					<div class="col-sm-7 registro-content columnas-deportes">
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
									<label class="col-sm-4"> teléfono/<br/>celular:</label>
									<input class="col-sm-3" type="tel" name="telefono" id="telefono" required value="{{Input::old('telefono')}}" class="{{$errors->has('telefono') ? 'error' : ''}}" maxlength="50">
									<label class="col-sm-2 dni"> dni:  </label>
									<input class="col-sm-3" type="number" name="dni" id="dni" required value="{{Input::old('dni')}}" class="{{$errors->has('dni') ? 'error' : ''}}" maxlength="8">
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
		<section id="container-premios" data-scroll-index="1">
			<div class="container premios">
				<div class="col-sm-6 vannia"><img src="{{url()}}/images/vania-coach.png" alt="Vannia"  class="img-responsive"/></div>
				<div class="col-sm-6 premios-content"><img src="{{url()}}/images/premios.png" alt="Premios"  class="img-responsive"/></div>
			</div>
		</section>
		<footer>

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-10">
						<span><img src="{{url()}}/images/terminos.jpg" alt="terminos" /></span>
					</div>
					<div class="col-sm-2">
						<img src="{{url()}}/images/ripley-logo.jpg" alt="ripley" class="img-responsive"/>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>