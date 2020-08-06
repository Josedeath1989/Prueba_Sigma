<?php 
	include 'API/datos.php';
	include 'API/conn.php';
	
?>
<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/estilos.css">
	<script type="text/javascript" src="JS/funciones.js"></script>
	<script type="text/javascript" src="JS/modal.js"></script>
	<title>Landing Page Prueba Sigma</title>
</head>
<body>

	<header>
		<div class="container">
			<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png">
			<h1>Prueba de Desarrollo Sigma</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
		</div>
	</header>
	<div>
		<section class="main row">
			<section class="col-md-6">
				<img class="imagen" src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png">
			</section>	
			<section class="col-md-6 box">
				<form id="f1" name="f1" action="API/insertar.php" method="post">
					<strong><label class="label"> Departamento<span class="req">*</span></label></strong>
					
					<select name="departamentos" id="departamentos" onchange="cambia_departamento()">
						
						    <option value="AMAZONAS">AMAZONAS</option>
                            <option value="ANTIOQUIA">ANTIOQUIA</option>
						    <option value="ARAUCA">ARAUCA</option>
						    <option value="ATLÁNTICO">ATLÁNTICO</option>
						    <option value="BOLÍVAR">BOLÍVAR</option>
						    <option value="BOYACÁ">BOYACÁ</option>
						    <option value="CALDAS">CALDAS</option>
						    <option value="CAQUETÁ">CAQUETÁ</option>
						    <option value="CASANARE">CASANARE</option>
						    <option value="CAUCA">CAUCA</option>
						    <option value="CESAR">CESAR</option>
						    <option value="CHOCÓ">CHOCÓ</option>
						    <option value="CÓRDOBA">CÓRDOBA</option>
						    <option value="CUNDINAMARCA">CUNDINAMARCA</option>
						    <option value="DISTRITO CAPITAL">DISTRITO CAPITAL</option>
						    <option value="GUAINÍA">GUAINÍA</option>
						    <option value="GUAVIARE">GUAVIARE</option>
						    <option value="HUILA">HUILA</option>
						    <option value="LA GUAJIRA">LA GUAJIRA</option>
						    <option value="MAGDALENA">MAGDALENA</option>
						    <option value="META">META</option>
						    <option value="NARIÑO">NARIÑO</option>
						    <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
						    <option value="PUTUMAYO">PUTUMAYO</option>
						    <option value="QUINDÍO">QUINDÍO</option>
						    <option value="RISARALDA">RISARALDA</option>
						    <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
						    <option value="SANTANDER">SANTANDER</option>
						    <option value="SUCRE">SUCRE</option>
						    <option value="TOLIMA">TOLIMA</option>
						    <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
						    <option value="VAUPÉS">VAUPÉS</option>
						    <option value="VICHADA">VICHADA</option>
						</select>
		
					
					<strong><label class="label"> Ciudad<span class="req">*</span></label></strong>
					
					<select name="minucipios" id="minucipios">

         				<option value="0">     </option>

					</select>
					
					<strong><label class="label"> Nombre<span class="req">*</span></label></strong>
					
					<input type="text" value="" name="nombre"  id="nombre" placeholder="Pepito de Jesús" required >
					
					<strong><label class="label"> Correo<span class="req">*</span></label></strong>
					
					<input type="text" value="" name="email" id="email" placeholder="pepitodejesus@gmail.com" required >

					<button id="myBtn" class="Enviar" name="enviar" >Enviar</button>
				</form>
			</section>
		</section>
		<div  id="myModal" class="modal">
			<div class="modal-content">
    			<span class="close">&times;</span>
    			<p>Tu información ha sido recibida satisfactoriamente</p>
 			 </div>
		</div>
	</div>
	<script type="text/javascript">
		

			var modal = document.getElementById("myModal");


			var btn = document.getElementById("myBtn");


			var span = document.getElementsByClassName("close")[0];

 
			btn.onclick = function() {
			  modal.style.display = "block";
			}


			span.onclick = function() {
			  modal.style.display = "none";
			}


			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
	</script>
	<script type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>