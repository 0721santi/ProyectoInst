<!DOCTYPE html>
<html>
<head>
    <title>CAMBIO DE DATOS</title>
	<link rel="icon" type="image/png" href="/img/logopjb.png">
    <meta charset="UTF-8">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
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

            $consulta = mysqli_query($conexion, "SELECT * FROM sakila.daticos");
            echo "<form active='reemplazo.php'>";
            while ($fila = mysqli_fetch_assoc($consulta))
            {echo "<tr><td><a href='confirmacion.php?iddaticos=".$fila["iddaticos"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."'>".$fila["iddaticos"]."</td><td><a href='cambios.php?iddaticos=".$fila["iddaticos"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."'>".$fila["preguntas"]."</a></td><td><a href='cambios.php?iddaticos=".$fila["iddaticos"]."&preg=".$fila["preguntas"]."&resp=".$fila["dificultad"]."'>".$fila["dificultad"]."</a></td></tr>";}
            echo "</form>";
            mysqli_close($conexion);
        ?>

    </table>
    <a href="/edicion/ndato.php"><h1>VOLVER A PÁGINA DE INGRESO DE DATOS</h1></a>
</body>
</html>