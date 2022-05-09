<?php 

class Card {

    private int $number;
    private int $cvc;
    private string $accountHolder;
    private string $expirationDate; // data type?


    public function __construct(int $number, int $cvc, string $accountHolder, string $expirationDate)
    {
        $this -> number = $number;
        $this -> cvc = $cvc;
        $this -> accountHolder = $accountHolder;
        $this -> expirationDate = $expirationDate;
    }

    public function getNumber(): int {
        return $this -> number;
    }
    
    public function getCvc(): int {
        return $this -> cvc;
    }
    public function getAccountHolder(): string {
        return $this -> accountHolder;
    }

    public function getExpirationDate(): string {
        return $this -> expirationDate;
    }

}

?>