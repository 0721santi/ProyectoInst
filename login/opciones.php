<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/optns.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/logopjb.png">
    <title>SELECCIONE UN JUEGO</title>
<style>
    body{
        background-color: #B22222;
    }
</style>
</head>
<body>
    <div class="letra"><h1>SELECCIONE UNA OPCIÓN</h1></div>
    <img src="/img/logoPJB2.png" class=ImagenPJB>
    <div class="opciones">
        <?php 
            $nom = $_GET['user'];
            $pass = $_GET['pass'];
            echo("<a href=/../index.html><button class='css-button-sharp--grey'>INICIO</button></a>");
            echo("<a href=/login/opcionesm.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>JUEGO MARIA</button></a>");
            echo("<a href=/login/opcionesdb.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>JUEGO DON BOSCO</button></a>");
        ?>
    </div>
</body>
</html>