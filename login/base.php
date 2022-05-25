<?php
    $nom = $_GET['name'];
    $pass = $_GET['pwd'];

    $pone = mysqli_connect('localhost',$nom,$pass,'preguntasmaria');
    if (!$pone) { echo "<meta http-equiv='refresh' content='0; url=autenticacion.php?error=1'>"; } 
    else { echo "<meta http-equiv='refresh' content='0; url=opciones.php?user=$nom&pass=$pass'>"; }
    mysqli_close($pone);
?>