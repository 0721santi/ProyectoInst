<!DOCTYPE html>
<html lang="es">  
<?php
    $nom = $_GET['user'];
    $pass = $_GET['pass'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/logopjb.png">
    <link rel="stylesheet" href="/css/juego.css">
    <title>JUEGO</title>
    <style>
        body{
            background-image: url(/img/FondoAlt.jpg);
            font-family: "Holtwood One SC", serif;
            height: auto;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>JUEGO</h1>
    <div class="cuerpo">
        <div class="id" style="width: 200px;">
            <?php
                $conexion = mysqli_connect("localhost",$nom,$pass,"preguntasmaria");

                //if (!$conexion) { echo "Conexión fallida<br>"; } else { echo "Conectado exitosamente<br>"; }

                $consulta = mysqli_query($conexion, "SELECT id FROM preguntasmaria.primaria");

                while ($fila = mysqli_fetch_assoc($consulta))
                {echo "<a href='preguntapri.php?id=".$fila['id']."&user=$nom&pass=$pass' class='numero' target='frame1'>".$fila["id"]."</a>";}
                mysqli_close($conexion);
            ?>
        </div>
        <div class="derecha">
            <div class="frame">
                <iframe name="frame1"></iframe>
            </div>
            <div class="contadores">
                <div class="contador-izq">
                    <iframe src="/contadores/c1.htm" style="height: 200px; width:390px;"></iframe>
                    <iframe src="/contadores/c2.htm" style="height: 200px; width:390px;"></iframe>
                    <iframe src="/contadores/c3.htm" style="height: 200px; width:390px;"></iframe>
                </div>
                <div class="contador-der">
                    <iframe src="/contadores/c4.htm" style="height: 200px; width:390px;"></iframe>
                    <iframe src="/contadores/c5.htm" style="height: 200px; width:390px;"></iframe>
                    <iframe src="/contadores/c6.htm" style="height: 200px; width:390px;"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>