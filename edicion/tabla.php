<!DOCTYPE html>
<html>
<head>
    <title>CAMBIO DE DATOS</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="/css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class=barra>
        <h2>Menu Juegos</h2><img src="/img/Icono.png" width="50px">
        <ul>
            <li><a href="/../index.html">Inicio</a></li>
            <li><a href="/juego/juego.php">Juego</a></li>
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
                $conexion = mysqli_connect("localhost","root","juan1");

                //if (!$conexion) { echo "Conexión fallida<br>"; } else { echo "Conectado exitosamente<br>"; }

                $consulta = mysqli_query($conexion, "SELECT * FROM preguntasmaria.preguntas");
                echo "<form active='reemplazo.php'>";
                while ($fila = mysqli_fetch_assoc($consulta))
                {echo "<tr><td><a href='confirmacion.php?iddaticos=".$fila["id"]."&preg=".$fila["pregunta"]."&resp=".$fila["dificultad"]."'>".$fila["id"]."</td><td><a href='cambios.php?iddaticos=".$fila["id"]."&preg=".$fila["pregunta"]."&resp=".$fila["dificultad"]."'>".$fila["pregunta"]."</a></td><td><a href='cambios.php?iddaticos=".$fila["id"]."&preg=".$fila["pregunta"]."&resp=".$fila["dificultad"]."'>".$fila["dificultad"]."</a></td></tr>";}
                echo "</form>";
                mysqli_close($conexion);
            ?>
        </table>
    </div>
    <div class=Volver>
        <a href="/edicion/ndato.php" ><input type="submit" value="VOLVER A PÁGINA DE INGRESO DE DATOS"></a>
    </div>
</body>
</html>