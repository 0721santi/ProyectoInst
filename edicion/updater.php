<?php
    $ida = $_GET['id'];
    $cam = $_GET['nrespuesta'];
    $nom = $_GET['user'];
    $pass = $_GET['pass'];

    $conectar = mysqli_connect('localhost',$nom,$pass,'preguntasmaria');
    //if (!$conectar) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "UPDATE preguntasmaria.preguntas SET dificultad='".$cam."' WHERE iddaticos='".$ida."'");
    mysqli_close($conectar);
?>
<meta http-equiv="refresh" content="0; url=tabla.php?user=$nom&pass=$pass">