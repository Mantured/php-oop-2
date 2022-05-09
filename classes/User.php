<?php 


class User {

    protected $name;
    protected $lastname;
    protected $username;
    protected $mail;
    protected $creditCard;
    protected $cart;
    
    /**
     * @param  mixed $the Name of the registered User
     * @param  mixed $the Lastname of the registered User
     * @param  mixed $the Username chosen by the User
     * @param  mixed $the E-mail indicated by the User
     * @param  mixed $the User's credit card
     * @param  mixed $User's cart
     */
    public function __construct($name, $lastname, $username, $mail, $creditCard, $cart = null)
    {
        $this -> name = $name;
        $this -> lastname = $lastname;
        $this -> username = $username;
        $this -> mail = $mail;
        $this -> creditCard = $creditCard;
        $this -> cart = $cart;
    }
}

$gino = new User('gino', 'gino', 'gino22', 'gini@gino.com', 123123123);

?>