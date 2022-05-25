<!DOCTYPE html>
<html>
<head>
    <title>¿CUANTO CONOCES A MARÍA?</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="/css/estilo.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $idatos = $_GET["iddaticos"];
        $preg = $_GET["preg"];
        $res = $_GET["resp"];
        $nom = $_GET['user'];
        $pass = $_GET['pass'];
    ?>
    <div class="info">
        <h3 class="titulo">¿Seguro que desea borrar estos datos?</h3>
        <p class="datos"> <?php echo $idatos; ?> <br><br> <?php echo $preg; ?> <br><br> <?php echo $res; ?></p>
        <form action="borra.php">
            <input type="hidden" name="respuestab" value=<?php echo $res; ?>>
            <input type="hidden" name="preguntab" value=<?php echo $preg; ?>>
            <input type="hidden" name="id" value=<?php echo $idatos; ?>>
            <input type="hidden" value="<?php echo $nom;?>" name="user">
            <input type="hidden" value="<?php echo $pass;?>" name="pass">
            <div class="botones"><input type="submit" value="Confirmar" class="css-button-sharp--grey">
            <a href="tabla.php"><button class="css-button-sharp--grey">Regresar</button></a></div>
        </form>
    </div>
</body>
</html>