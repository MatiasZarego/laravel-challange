<!DOCTYPE html>

<html lang="es"><head>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Cabify</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:100,700" rel="stylesheet" type="text/css">
<!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet"  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--link href="http://localhost/css/app.css" rel="stylesheet" type="text/css" -->
<link href="http://localhost/css/cabify.css" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>


</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-31266594-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-31266594-3');
</script>

	</head>
    <body>
	<div class="container">
		<div class="row">
			<div class="logo">
	<img src="http://localhost/img/logo.png" border="0">
</div>		</div>
		<div class="row">

<div class="container">


<form method="POST" action="http://localhost/prospects" accept-charset="UTF-8">
    @csrf
    <div class="row">
		<div class="col-sm-1"></div>
        <div class="col-sm-5">
			<div class="form-group ">
			<label for="Nombre">Nombre</label>
			<input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name" type="text">
			<span class="text-danger"></span>
			@error('name') {{ $message}} @enderror
			</div>
		</div>
        <div class="col-sm-5">
			<div class="form-group ">
			<label for="Apellido">Apellido</label>
			<input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname" type="text">
			<span class="text-danger"></span>
			@error('lastname') {{ $message}} @enderror
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
        <div class="col-sm-10">
			<div class="form-group ">
			<label for="Mail">Mail</label>
			<input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email" type="text">
			<span class="text-danger"></span>
			@error('email') {{ $message}} @enderror
			</div>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
        <div class="col-sm-10">
			<div class="form-group">
			<button class="btn btn-send">Enviar</button>
			</div>
		</div>
		<div class="col-sm-1"></div>
    </div>
</form>
</div>
		</div>
	</div>

</body></html>
</html>
