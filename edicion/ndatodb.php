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
        $nom = $_GET['user'];
        $pass = $_GET['pass'];
    ?>
    <div class="LogoInstitucional">
        <a href="https://pedrojustoberrio.edu.co/"target="_blank"><img src="/img/Logo_Colegio.png" width="230px"></a>
    </div> 
    <div class=barra>
        <h2>Menu Juegos</h2><img src="/img/Icono.png" width="50px">
        <ul>
            <li><a href="/../index.html">Inicio</a></li>
            <li><a href="/login/opcionesdb.php?user=<?php echo $nom;?>&pass=<?php echo $pass;?>">OPCIONES</a></li>
        </ul>
    </div>       
    <div class="Insertar">
        <h1>AGREGA DATO</h1>
        <form action="/edicion/insertdb.php">
            ID DATO <br><input class=Caja type="text" name="IDDATO"><br><br>
            PREGUNTA<br><input class=Caja type="text" name="PREGUNTA"><br><br>
            DIFICULTAD<br><input class=Caja type="text" name="DIFICULTAD"><br><br><br><br><br><br><br>
            <input type="hidden" value="<?php echo $nom;?>" name="user">
            <input type="hidden" value="<?php echo $pass;?>" name="pass">
            <div class="Boton1"><input type="submit" value="Confirmar"></div>
        </form>
    </div> 
</body>
</html>