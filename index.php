<?php 

include_once __DIR__ . '/classes/User.php';


$gino = new User('gino', 'gino', 'gino22', 'password', 'gini@gino.com', 123456);


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
</body>
</html>