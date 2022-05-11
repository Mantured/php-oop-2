<?php 
include __DIR__ . '/classes/1_includelist.php'
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
    $product1 = new Product('Bocconcini di Carne', 'cibo per cani', 'cibo', 'buonissimo cibo per cani, fatto con le mani di Jerry', 43.543);
    var_dump($product1);
    $product2 = new Product('Salami appesi ', 'speranze dei givani', 'giocattoli', 'le speranze dei givani viaggiatori dette anche salami appesi', 100.3345);
    var_dump($product2);
    $card1 = new CreditCard('1122334455667788', '333', 4, 25, 'Pasquale Fernando');
    $card2 = new CreditCard('8877665544332211', '323', 3, 28, 'Giovanni Furlanut');
    var_dump(new Datetime);
    var_dump($card1);
    var_dump($card1 -> is_Expired());
    var_dump($card1 -> getExpirationDate());
    $Pasquale = new Customer('Pasquale', 'Fernando', "Pasq345" , 'adc123444646','1992-04-04', 'fernando.pasquale@gmail.com',$card1 , 'via le mani dai piedi, 9, 30056, Villorba, NA');
    var_dump($Pasquale);
    /* $assa = new CustomerUnregistered($card1); */
    var_dump($card2);
    $guest = new CustomerUnregistered($card2);
    var_dump($guest);
    $giovanni = new CustomerRegistered('Giovanni', 'Furlanut', 'Furla234', 'ambaraba12', '1989-12-06', 'furlanut.giovanni@gmail.com', $card2, 'via sempre sereni, 8, 30012, Noventa, VE');
    $giovanni-> getCart() -> addProductToCart($product1);
    $giovanni-> getCart() -> addProductToCart($product2);
    var_dump($giovanni -> getCart() -> getProducts());
    var_dump($giovanni -> getAmountCart() );
    var_dump($giovanni -> canPay());
    $guest -> getCart() -> addProductToCart($product2);

    var_dump($guest -> getAmountCart() );
    var_dump($guest -> canPay());
    ?>
</body>
</html>