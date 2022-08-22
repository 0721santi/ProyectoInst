<!DOCTYPE html>
<html>
<head>
    <title>¿CUANTO CONOCES A MARÍA?</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="/css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        $idatos = $_GET["iddaticos"];
        $preg = $_GET["preg"];
        $res = $_GET["resp"];
        $nom = $_GET['user'];
        $pass = $_GET['pass'];
    ?>
    <div class=barra>
        <h2>Menu Juegos</h2><img src="/img/Icono.png" width="50px">
        <ul>
            <li><a href="/../index.html">Inicio</a></li>
            <li><a href="tabladb.php?user=$nom&pass=$pass">Regresar</a></li>
        </ul>
    </div>
    <H1>PREGUNTA ACTUAL: <?php echo $preg; ?></H1>
    <form action="/edicion/updatepdb.php">
        EDITAR PREGUNTA<input type="text" name="npregunta">
        <input type="hidden" name="iddaticos" value=<?php echo $idatos; ?>>
        <input type="submit">
        </form><br><br>
        <H1>RESPUESTA ACTUAL: <?php echo $res; ?></H1>
        <form action="/edicion/updaterdb.php">
        EDITAR RESPUESTA<input type="text" name="nrespuesta">
        <input type="hidden" name="iddaticos" value=<?php echo $idatos; ?>>
        <input type="submit">
    </form>
</body>
</html>