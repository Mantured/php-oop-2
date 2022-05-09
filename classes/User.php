<?php 

require_once __DIR__ . '/Card.php';

class User {

    protected string $name;
    protected string $lastname;
    protected string $username;
    protected string $password;
    protected string $mail;
    protected Card $card;
    protected $cart; //array? 
    
    /**
     * the User component
     * @param  mixed $name The Name of the registered User
     * @param  mixed $lastname The Lastname of the registered User
     * @param  mixed $username The Username chosen by the User
     * @param  mixed $password The password by User
     * @param  mixed $mail The E-mail indicated by the User
     * @param  mixed $card The User's credit card
     * @param  mixed $User's cart
     */
    public function __construct(string $name, string $lastname, string $username, string $password, string $mail,  Card $card = null)
    {
        $this -> name = $name;
        $this -> lastname = $lastname;
        $this -> username = $username;
        $this -> password = $password;
        $this -> mail = $mail;
        $this -> card = $card;
        /* $this -> cart = $cart; */
    }
    
    /**
     * Get USer's Name
     *
     * @return string
     */
    public function getName(): string {
        return $this -> name;
    }    

    /**
     * Get User's  Lastname
     *
     * @return string
     */
    public function getLastname(): string {
        return $this -> name;
    }    

    /**
     * Get User's  Username
     *
     * @return string
     */
    public function getUsername(): string{
        return $this -> username;
    }    

    /**
     * Get User's  Mail
     *
     * @return string
     */
    public function getMail() :string{
        return $this -> mail;
    }    

    /**
     * Get User's Card
     *
     * @return Card
     */
    public function getCard(): Card {
        return $this -> card;
    }
}
?>