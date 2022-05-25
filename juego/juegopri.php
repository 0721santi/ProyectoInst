<html>
<?php
    $counter = 0;
    $nom = $_GET['user'];
    $pass = $_GET['pass'];
?>
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>
    <button onclick="<?php $counter=$counter+1 ?>"><?php echo $counter ?></button>
</body>

</html>