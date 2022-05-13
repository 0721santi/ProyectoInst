<?php
    $ida = $_GET['iddaticos'];
    $conectar = mysqli_connect('localhost','root','juan1','sakila');
    //if (!$conectar) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "DELETE FROM sakila.daticos WHERE iddaticos ='".$ida."'");
    mysqli_close($conectar);
?>

<meta http-equiv='refresh' content='0; url=tabla.php'>