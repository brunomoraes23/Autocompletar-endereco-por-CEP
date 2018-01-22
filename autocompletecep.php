<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"/></script>

	<title>Auto completar endereço</title>
</head>
<body>
	<form action="#" onsubmit="return false">
		<div class="form-group">
			<label for="cep">Cep:</label>
			<input type="text" class="form-control" id="cep" autofocus onblur="buscaCep()" maxlength="8>
		</div>
		<div class="form-group">
			<label for="logradouro">Logradouro:</label>
			<input type="text" class="form-control" id="logradouro">
		</div>
		<div class="form-group">
			<label for="bairro">Bairro:</label>
			<input type="text" class="form-control" id="bairro">
		</div>
		<div class="form-group">
			<label for="estado">Estado:</label>
			<input type="text" class="form-control" id="estado">
		</div>
		<div class="form-group">
			<label for="cidade">Cidade:</label>
			<input type="text" class="form-control" id="cidade">
		</div>
	</form>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>
