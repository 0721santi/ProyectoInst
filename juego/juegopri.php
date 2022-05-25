<html>
<?php
$counter = 0;
?>

<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>

<body>
    <form action="<?php $counter + 1 ?>">
        <input type="submit" value="click me!" name="clicks" />
    </form>
    <h2><?php echo $counter ?> clicks!</h2>
</body>

</html>