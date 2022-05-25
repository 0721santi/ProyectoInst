<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/optns.css">
    <link rel="icon" type="image/png" href="/img/logopjb.png">
    <title>Seleccione una opción</title>
</head>
<body>
    <div class="LogoInstitucional">
        <a href="https://pedrojustoberrio.edu.co/"target="_blank"><img src="/img/Logo_Colegio.png" width="230px"></a>
    </div> 
    <div class="letra"><h1>SELECCIONE UNA OPCIÓN</h1></div>
    <img src="/img/VirgenAlt.png" class=Imagen>
    <div class="opciones">
        <?php 
            $nom = $_GET['user'];
            $pass = $_GET['pass'];
            echo("<a href=/../index.html><button class='css-button-sharp--grey'>INICIO</button></a>");
            echo("<a href=/juego/juegopri.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>JUEGO PRIMARIA</button></a>");
            echo("<a href=/juego/juegosec.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>JUEGO BACHILLERATO</button></a>");
            echo("<a href=/edicion/tabla.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>EDITAR DATOS</button></a>");
            echo("<a href=/edicion/ndato.php?user=$nom&pass=$pass><button class='css-button-sharp--grey'>NUEVOS DATOS</button></a>");
        ?>
    </div>
</body>
</html>