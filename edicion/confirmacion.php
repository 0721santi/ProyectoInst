<!DOCTYPE html>
<html>
<head>
    <title>¿CUANTO CONOCES A MARÍA?</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        $idatos = $_GET["iddaticos"];
        $preg = $_GET["preg"];
        $res = $_GET["resp"];
    ?>
        <H1>¿Seguro que desea borrar estos datos?</h1><br>
        <p> <?php echo $idatos; ?>; <?php echo $preg; ?>; <?php echo $res; ?></p>
        <form action="borra.php">
        <input type="hidden" name="respuestab" value=<?php echo $res; ?>>
        <input type="hidden" name="preguntab" value=<?php echo $preg; ?>>
        <input type="hidden" name="iddaticos" value=<?php echo $idatos; ?>>
        <input type="submit" value="Confirmar">
        </form>
</body>
</html>