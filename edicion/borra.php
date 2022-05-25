<?php
    $ida = $_GET['id'];
    $nom = $_GET['user'];
    $pass = $_GET['pass'];
    $conectar = mysqli_connect('localhost',$nom,$pass,'preguntasmaria');
    //if (!$conectar) { echo "Conexión fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "DELETE FROM preguntasmaria.preguntas WHERE id ='".$ida."'");
    mysqli_close($conectar);
?>

<meta http-equiv='refresh' content='0; url=tabla.php?user=<?php echo $nom;?>&pass=<?php echo $pass;?>'>