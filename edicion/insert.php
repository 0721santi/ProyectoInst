<?php
    $ida = $_GET['IDDATO'];
    $pre = $_GET['PREGUNTA'];
    $dif = $_GET['DIFICULTAD'];
    $conectar = mysqli_connect('localhost','root','juan1','sakila');
    //if (!$conectar) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "INSERT INTO `sakila`.`daticos` (`iddaticos`, `preguntas`, `dificultad`) values ( '$ida', '$pre', '$dif')");
    mysqli_close($conectar);
?>
<meta http-equiv="refresh" content="0.1; url=tabla.php">
