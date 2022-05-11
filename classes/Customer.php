<?php 


include_once __DIR__ . './CreditCard.php';
include_once __DIR__ . './Cart.php';


class Customer
{
    protected string $firstName;
    protected string $lastName;
    protected $username;
    protected $password;
    /* protected DateTime $birthDay; */
    protected $birthDay;
    protected string $mail;
    protected CreditCard $credit_card;
    protected $deliveryAddress;
    protected Cart $cart;

        
    /**
     * __construct
     *
     * @param  string $firstName user's first name
     * @param  string $lastName users's last name 
     * @param  DataTime $birthDay customer's birthday
     * @param  string $mail e-mail address 
     * @param  CreditCard $credit_card user's credit card
     * @param  string $deliveryAddress  user's address for the delivery
     */
     /*  public function __construct(string $firstName,string $lastName, int $year, int $month, int $day, string $mail, CreditCard $credit_card = null, $deliveryAddress = false) */
    public function __construct(string $firstName, string $lastName, $username = null, $password = null, $birthDay = null, string $mail, CreditCard $credit_card = null, $deliveryAddress = null)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> username = $username;
        $this -> password = $password;
        /* $this -> birthDay = DateTime::createFromFormat("Y-m-d", "$19$year-$month-$day"); */
        $this -> birthDay = $birthDay;
        $this -> mail = $mail;
        $this -> credit_card = $credit_card;
        $this -> deliveryAddress = $deliveryAddress;
        $this -> cart = new Cart();
    }

    
    /**
     * getFirstName
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this -> firstName;
    }

    
    /**
     * setFirstName
     *
     * @param  mixed $firstName
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        return $this -> firstName = $firstName;
    }

        
    /**
     * getLastName
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this -> lastName;
    }

    
    /**
     * setLastName
     *
     * @param  mixed $lastName
     * @return void
     */
    public function setLastName(string $lastName)
    {
        return $this -> lastName = $lastName;
    }


    public function getUsername()
    {
        return $this-> username;
    }


    public function setUsername($username)
    {
        return $this -> username = $username;
    }
    
    /**
     * getPassword
     *
     * @return string
     */
    public function getPassword()
    {
        return $this -> password;
    }

    
    /**
     * setPassword
     *
     * @param  mixed $password
     * @return void
     */
    public function setPassword($password)
    {
        return $this -> password = $password;
    }
    
    /**
     * getBirthDay
     *
     * @return string
     */
    public function getBirthDay()
        {
            return $this-> birthDay;
        }
    
    public function setBirthDay($birthDay)
    {
        return $this -> birthDay = $birthDay;
    }

        
    /**
     * getMail
     *
     * @return string
     */
    public function getMail(): string
    {
        return $this -> mail;
    }

    
    /**
     * setMail
     *
     * @param  mixed $mail
     * @return void
     */
    public function setMail(string $mail)
    {
        return $this -> mail = $mail;
    }

    
    /**
     * getCreditCard
     *
     * @return CreditCard
     */
    public function getCreditCard(): CreditCard
        {
            return $this-> credit_card;
        }
    
        public function getDeliveryAddress()
    {
        return $this -> deliveryAddress;
    }

    
    /**
     * setDeliveryAddress
     *
     * @param  mixed $deliveryAddress
     * @return void
     */
    public function setDeliveryAddress( $deliveryAddress)
    {
        return $this -> deliveryAddress = $deliveryAddress;
    }

    /**
     * canPay
     *
     * @return bool
     */
    /* public function canPay(): bool
    {
        return $this -> credit_card -> is_Expired();
    } */
    public function canPay()
    {
        if($this -> credit_card -> is_Expired() == false){
            return 'puo tranquillamente pagare';
        }
    } 

    public function getCart(): Cart
    {
        return $this -> cart; 
    }


    public function getAmountCart(): float
    {
        return $this -> cart -> getTotalAmount();
    }
    

}






?>