<?php
    $nom = $_GET['name'];
    $pass = $_GET['pwd'];

    $pone = mysqli_connect('localhost','root','juan1','preguntasmaria');
    //if (!$pone) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $consulta = mysqli_query($pone, "SELECT contrasena FROM preguntasmaria.login where nombre='".$nom."'");
    
    while($fila = mysqli_fetch_assoc($consulta)) { $con=$fila["contrasena"]; }
    
    if( $pass==$con ){ echo "<meta http-equiv='refresh' content='0; url=/edicion/tabla.php'>"; }
    else { echo "<meta http-equiv='refresh' content='0; url=autenticacion.php?error=1'>"; }

    mysqli_close($pone);
?>
