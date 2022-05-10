<?php 

include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/Food.php';






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Znoop Dogy </title>

</head>
<body>
    <!-- <header>
        <section class="container-fluid h-100">
            <div class="row h-100 align-items-center text-warning">
                <div class="col-4">
                    <h4>Ciao <?php echo $franco -> getName().' '.$franco -> getLastname()?></h4>
                </div>
                <div class="col-4 offset-4 text-end text-white">
                    <h6>hai effettuato l'accesso come: <span class="text-warning"><?= $franco -> getUsername() ?></span> </h6>
                </div>
            </div>
        </section>
    </header> -->
   <!--  <main class="details">
        <section class="container">
            <div class="row">
                <h3>Riepilogo ordine:</h3>
                <div class="col-4">
                    <h5 class="text-uppercase"> Product: </h5>
                </div>
                <div class="col-6">
                    <p><?= $bocconciniDiCarne -> getName() ?></p>
                </div>
                <div class="col-4">
                    <h5 class=""> indicato per: </h5>
                </div>
                <div class="col-6">
                    <p><?= $bocconciniDiCarne -> getCategory() ?></p>
                </div>
                <div class="col-4">
                    <h5 class=""> prezzo: </h5>
                </div>
                <div class="col-6">
                    <p><?= $bocconciniDiCarne -> getPrice() ?></p>
                </div>
                <div class="col-4">
                    <h5 class=""> ingredienti: </h5>
                </div>
                <div class="col-6">
                    <p><?= $bocconciniDiCarne-> getIngredients() ?></p>
                </div>
                <div class="col-6">
                    <p><?= $bocconciniDiCarne-> getEnvironmentalImpact() ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row ">
                        <div class="col-5">
                            <p>mail di conferma all'indirizzo:</p>
                        </div>
                        <div class="col-7">
                            <?= $franco -> getMail() ?>
                        </div>
                        <div class="col-5">
                            <p>numero carta di credito:</p>
                        </div>
                        <div class="col-7">
                            <p> <?= (int)$card -> getNumber() ?></p>
                        </div>
                        <div class="col-5">
                            <p>cvc:</p>
                        </div>
                        <div class="col-7">
                            <p> <?= (int)$card -> getCvc() ?></p>
                        </div>
                        <div class="col-5">
                            <p>anno di scadenza:</p>
                        </div>
                        <div class="col-7">
                            <p> <?= $card -> getExpirationDate() ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row ">
                        <div class="col-5">
                            <p>sconto: </p>
                        </div>
                        <div class="col-7">
                            <?= $franco -> getDiscount() ?>
                        </div>
                        <div class="col-5">
                            <p>prezzo scontato:</p>
                        </div>
                        <div class="col-7">
                            <p> <?= $franco -> confirmOrder($bocconciniDiCarne) ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main> -->
</body>
</html>