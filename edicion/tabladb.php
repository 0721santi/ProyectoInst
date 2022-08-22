<!DOCTYPE html>
<html>
<head>
    <title>CAMBIO DE DATOS</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="/css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php 
        $nom = $_GET['user'];
        $pass = $_GET['pass'];
    ?>
    <div class=barra>
        <h2>Menu Juegos</h2><img src="/img/Icono.png" width="50px">
        <ul>
            <li><a href="/../index.html">INICIO</a></li>
            <li><a href="/login/opciones.php?user=<?php echo $nom;?>&pass=<?php echo $pass;?>">OPCIONES</a></li>
        </ul>
    </div>
    <div class=Tabla>
        <table>
            <tr>
                <thead>
                    <th>ID PREGUNTA</th>
                    <th>PREGUNTA</th>
                    <th>DIFICULTAD</th>
                </thead>
            </tr>
            <?php
                $conexion = mysqli_connect("localhost",$nom,$pass,'preguntasdb');
                //if (!$conexion) { echo "Conexión fallida<br>"; } else { echo "Conectado exitosamente<br>"; }

                $consulta = mysqli_query($conexion, "SELECT * FROM preguntasdb.preguntassec");
                echo "<form active='reemplazo.php'>";
                while ($fila = mysqli_fetch_assoc($consulta))
                {echo "<tr>
                    <td><a href='confirmaciondb.php?iddaticos=".$fila["id"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."&user=$nom&pass=$pass'>".$fila["id"]."</a></td>
                    <td><a href='cambiosdb.php?iddaticos=".$fila["id"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."&user=$nom&pass=$pass'>".$fila["preguntas"]."</a></td>
                    <td><a href='cambiosdb.php?iddaticos=".$fila["id"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."&user=$nom&pass=$pass'>".$fila["dificultad"]."</a></td>
                    </tr>";
                }
                echo "</form>";
                mysqli_close($conexion);
            ?>
        </table>
    </div>
</body>
</html>