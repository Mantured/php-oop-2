<?php 
class CreditCard
{
    private string $number;
    private string $cvc;
    private DateTime $expirationDate;
    private string $accountHolder;

    
    /**
     * __construct
     *
     * @param  string $number of credit card
     * @param  string $cvc Card Verification Code of credit card
     * @param  int $month expiry credit card
     * @param  int $year expiry credit card
     * @param  string $accountHolder credentials of the owner 
     */
    public function __construct(string $number, string $cvc, int $month, int $year, string $accountHolder)
    {
        if (strlen($number) != 16 || !(is_numeric($number))) {
            throw new Exception ('you had insert an invalid Card');
        }
        if (strlen($cvc) != 3|| !(is_numeric($cvc))) {
            throw new Exception ('you had insert an invalid Card Verification Code');
        }

        $this -> number = $number;
        $this -> cvc = $cvc;
        $this -> expirationDate = DateTime::createFromFormat('n-Y',  "$month-20$year");
        $this -> accountHolder = $accountHolder;
    }
        
        /**
         * getNumber
         *
         * @return string
         */
        public function getNumber() : string
        {
            return $this-> number;
        }

                
        /**
         * setNumber
         *
         * @param  mixed $number
         * @return void
         */
        public function setNumber(string $number)
        {
            return $this-> number = $number;
        }

                
        /**
         * getCvc
         *
         * @return string
         */
        public function getCvc() : string
        {
            return $this-> cvc;
        }

                
        /**
         * setCvc
         *
         * @param  mixed $cvc
         * @return void
         */
        public function setCvc(string $cvc)
        {
            return $this-> cvc = $cvc;
        }

                
        /**
         * is_Expired check if the credit card is expired or not
         *
         * @return bool
         */
        public function is_Expired(): bool
        {
            return $this -> expirationDate < new DateTime;
        }
        

                
        /**
         * getExpirationDate
         *
         * @return DateTime
         */
        public function getExpirationDate(): DateTime
        {
            return $this-> expirationDate;
        }

                
        /**
         * setExpirationDate
         *
         * @param  mixed $expirationDate
         * @return void
         */
        public function setExpirationDate(DateTime $expirationDate)
        {
            return $this-> expirationDate = $expirationDate;
        }
        
                
        /**
         * getAccountHolder
         *
         * @return string
         */
        public function getAccountHolder() : string
        {
            return $this-> accountHolder;
        }
        
                
        /**
         * setAccountHolder
         *
         * @param  mixed $accountHolder
         * @return void
         */
        public function setAccountHolder(string $accountHolder)
        {
            return $this-> accountHolder = $accountHolder;
        }

}
?>