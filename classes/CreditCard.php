<?php 

class CreditCard
{
    private string $number;
    private string $cvc;
    private DateTime $expirationDate;
    private string $accountHolder;


    public function __construct(string $name, string $cvc, int $month, int $year, string $accountHolder)
    {
        if (strlen($number) !== 16 || is_nan($number)) {
            throw new Exception ('you had insert an invalid Card');
        }
        if (strlen($number) !== 3|| is_nan($cvc)) {
            throw new Exception ('you had insert an invalid Card Verification Code');
        }

        $this -> number = $number;
        $this -> cvc = $cvc;
        $this -> expirationDate = DateTime:: createFromFormat('n-Y',  "$year/$month" );
        $this -> accountHolder = $accountHolder;
    }

    
}



?>