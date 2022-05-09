<?php 

class Card {

    private  $number;
    private  $cvc;
    private  $accountHolder;
    private  $expirationDate; // data type?


    public function __construct($number, $cvc, $accountHolder,  $expirationDate)
    {
        $this -> number = $number;
        $this -> cvc = $cvc;
        $this -> accountHolder = $accountHolder;
        $this -> expirationDate = $expirationDate;
    }

    public function getNumber() {
        return $this -> number;
    }
    
    public function getCvc() {
        return $this -> cvc;
    }
    public function getAccountHolder() {
        return $this -> accountHolder;
    }

    public function getExpirationDate() {
        return $this -> expirationDate;
    }

}

/* add some control data after exercise */

?>