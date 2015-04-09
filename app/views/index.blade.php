<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		.error {
			color: red;
			border: 2px solid red
		}
	</style>
</head>
<body>
	<div class="welcome">
		
		@if ($errors->has())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }}<br>        
			@endforeach
		</div>
		@endif
		
		<form action="#" id="registro" name="registro">
			<label>
				nombres: 
				<input type="text" name="nombres" id="nombres" required value="{{Input::old('nombres')}}" class="{{$errors->has('nombres') ? 'error' : ''}}" maxlength="50">
			</label>
			<br>
			<label>
				apellidos: 
				<input type="text" name="apellidos" id="apellidos" required value="{{Input::old('apellidos')}}" class="{{$errors->has('apellidos') ? 'error' : ''}}" maxlength="50">
			</label>
			<br>
			<label>
				dni: 
				<input type="number" name="dni" id="dni" required value="{{Input::old('dni')}}" class="{{$errors->has('dni') ? 'error' : ''}}" maxlength="8">
			</label>
			<br>
			<label>
				teléfono: 
				<input type="number" name="telefono" id="telefono" required value="{{Input::old('telefono')}}" class="{{$errors->has('telefono') ? 'error' : ''}}" maxlength="50">
			</label>
			<br>
			<label>
				email: 
				<input type="email" name="email" id="email" required value="{{Input::old('email')}}" class="{{$errors->has('email') ? 'error' : ''}}" maxlength="100">
			</label>
			<br>
			<label>
				distrito: 
				<input type="text" name="distrito" id="distrito" required value="{{Input::old('distrito')}}" class="{{$errors->has('distrito') ? 'error' : ''}}">
			</label>
			<br>
			<label>
				código: 
				<input type="number" name="codigo" id="codigo" required value="{{Input::old('codigo')}}" class="{{$errors->has('codigo') ? 'error' : ''}}" maxlength="13">
			</label>
			<br>
			<label>
				deseo recibir: 
				<input type="checkbox" name="newsletter" id="newsletter">
			</label>
			<br>
			<input type="button" value="enviar" id="enviar">
		</form>
	</div>
	<script>
		$(document).ready(function () {
			$('#enviar').click(function () {
				$.ajax({
					url: '{{url()}}/registro',
					data: $('#registro').serialize(),
					error: function () {
						console.log('error');
					},
					dataType: 'json',
					success: function(data) {
						if (data.success == 'error') {
							console.log(data);
						} else {
							console.log('ok');
						}
						
						/*var $title = $('<h1>').text(data.talks[0].talk_title);
						var $description = $('<p>').text(data.talks[0].talk_description);
						$('#info')
								.append($title)
								.append($description);*/
					},
					type: 'POST'
				});
			});
		});
	</script>
</body>
</html>