<html>
<head>
	<title>Proyecto continental</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


</head>
<body>

<div class="container-fluid m-0 p-0">
	<!--Inicia barra de navegación -->
	<nav class="navbar navbar-expand-sm navbar-light bg-orange m-0 p-0" id="nav-P">
	  <a class="navbar-brand" href="index.html"><img src="img/logo.jpg"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item mr-5">
	        <a class="nav-link active" href="index.html"><h6>Inicio</h6></a>
	      </li>
	      <li class="nav-item mr-5">
	        <a class="nav-link" href="form.html"><h6>Registrar falla</h6></a>
	      </li>
	    </ul>
	  </div>
	</nav>

<!--Inicia portada -->

	<div class="row d-flex justify-content-center buscador parallax m-0 p-0">
		<div class="col-5 bg-orange-light  my-auto p-4">
			
				<div class="row d-fex">
					<form class="form-inline w-100 mx-auto mb-0">
							<div class="col-5">
								  <div class="input-group ">
								    <div class="input-group-prepend">
								      <div class="input-group-text">Linea</div>
								    </div>
								  	  <select id="Select" class="form-control">
								        <option>CVSG'S</option>
								        <option>Navistar</option>
								        <option>Volvo</option>
								        <option>Mack</option>
								      </select>
								  </div>
							</div>
							<div class="col-5">
								  <div class="input-group ">
								    <div class="input-group-prepend">
								      <div class="input-group-text">Equipo</div>
								    </div>
								    <select id="Select" class="form-control">
								        <option>Programación</option>
								        <option>Pin Press</option>
								        <option>Ensamble de LCD</option>
								        <option>Dial Press</option>
								        <option>Pointer Press</option>
								        <option>Atornillado</option>
								        <option>Vision</option>
								        <option>End Control</option>
								        <option>safe launch</option>
								      </select>
								  </div>
							</div>
					 	<div class="col-2 mr-auto">
					  		<button type="button" class="btn bg-orange py-2" data-toggle="collapse" aria-expanded="false" aria-controls="demo" data-target="#demo">Buscar</button>
					  	</div>	
					 
					</form>
				 </div>
		</div>
	</div>
</div>
<!--Inicia tabla de información -->
<div class="containter" >
	<div class="row d-fex justify-content-center m-0 p-0">
		<div class="col-8 collapse" id="demo">
			<div id="tabla-dinamica">
				
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
			$('#tabla-dinamica').load('php/tabla.php');
	});
</script>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>