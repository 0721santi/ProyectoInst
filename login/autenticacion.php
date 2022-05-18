<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="/img/logopjb.png">
  <title>INGRESO</title>
  <link href="/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<img src="/img/VirgenAlt.png">
			</div>
		</div>
		<div class="right">
			<form action="base.php" method="GET">
				<div class="texto">
					<h5>Ingreso</h5>
					<div class="inputs">
						<input type="text" name="name">
						<br>
						<input type="password" placeholder="Contraseña" name="pwd">
					</div>
					<br><br>
					<input type="submit" value="Siguiente" class="css-button-sharp--grey">
				</div>
			</form>
			<div class=Error>
					<?php 
						$error = $_GET['error'];
						if($error==1) {echo "DATOS ERRONEOS";}
					?>
				</div>
			<div class="imagen">
				<a href="https://pedrojustoberrio.edu.co/"target="_blank"><img src="/img/Logo_Colegio.png" width="230px"></a>
			</div>
		</div>
	</div>
</body>
</html>