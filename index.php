<?php 
include __DIR__ . '/classes/includelist.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $product1 = new Product('Bocconcini di Carne', 'cibo per cani', 'cibo', 'buonissimo cibo per cani, fatto con le mani di Jerry', 43.543, 1234567188);
    var_dump($product1);
    $product2 = new Product('Salami appesi ', 'speranze dei givani', 'giocattoli', 'le speranze dei givani viaggiatori dette anche salami appesi', 100.3345, 987654321);
    var_dump($product2);
    
    
    ?>
</body>
</html>