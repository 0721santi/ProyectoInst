<?php
    $ida = $_GET['iddaticos'];
    $cam = $_GET['nrespuesta'];
    $conectar = mysqli_connect('localhost','root','juan1','sakila');
    //if (!$conectar) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "UPDATE sakila.daticos SET dificultad='".$cam."' WHERE iddaticos='".$ida."'");
    mysqli_close($conectar);
?>
<meta http-equiv="refresh" content="0; url=tabla.php">