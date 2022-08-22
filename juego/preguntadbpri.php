<html>
<?php
    $nom = $_GET['user'];
    $pass = $_GET['pass'];
    $id = $_GET['id'];
?>
<head>
    <meta charset="UTF-8">
    <title>PREGUNTA</title>
    <link rel="stylesheet" href="/css/juego.css">
    <style>
        body{background-color: transparent}  
    </style>
</head>
<body>
    <div class="texto">
        <?php
            $conexion = mysqli_connect("localhost",$nom,$pass,'preguntasdb');
            //if (!$conexion) { echo "Conexión fallida<br>"; } else { echo "Conectado exitosamente<br>"; }
            $consulta = mysqli_query($conexion, "SELECT id, preguntas FROM preguntasdb.preguntaspri WHERE id='".$id."'");
            while($fila = mysqli_fetch_assoc($consulta))
            {echo "<tr><td>".$fila["id"]."</td><br><br><td>". $fila["preguntas"]. "</td></tr>";}
            mysqli_close($conexion)
        ?>
    </div>
</body>
</html>