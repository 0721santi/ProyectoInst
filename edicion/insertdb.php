<?php
    $ida = $_GET['IDDATO'];
    $pre = $_GET['PREGUNTA'];
    $dif = $_GET['DIFICULTAD'];
    $nom = $_GET['user'];
    $pass = $_GET['pass'];
    $conectar = mysqli_connect('localhost',$nom,$pass,'preguntasdb');
    //if (!$conectar) { echo "Conección fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
    $result = mysqli_query($conectar, "INSERT INTO preguntasdb.preguntas (`id`, `preguntas`, `dificultad`) values ( '$ida', '$pre', '$dif')");
    mysqli_close($conectar);
?>
<meta http-equiv="refresh" content="0; url=tabladb.php?user=<?php echo $nom;?>&pass=<?php echo $pass;?>">
