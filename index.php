<?php 

include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/Product.php';



$gino = new User('gino', 'gino', 'gino22', 'password', 'gini@gino.com', new Card (123456, 123, 'gino', '31 dicembre 1992'));
$sassi = new Product('sassi', 'giocattolo', 'cani', 1000,346)


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Znoop Dogy </title>
</head>
<body>
    <?php var_dump($gino)?>
    <?php var_dump($sassi)?>
</body>
</html>