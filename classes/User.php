<?php 

require_once __DIR__ . '/Card.php';

class User {

    protected  $name;
    protected  $lastname;
    protected  $username;
    protected  $password;
    protected  $mail;
    protected  $card;
    protected  $is_registered;
    protected  $discount;
    
    

    public function __construct( $name,  $lastname,  $username,  $password,  $mail, $card, $is_registered )
    {
        $this -> name = $name;
        $this -> lastname = $lastname;
        $this -> username = $username; 
        $this -> password = $password;
        $this -> mail = $mail;
        $this -> setCard($card);
        $this -> is_registered =$is_registered;
        $this -> discount = $this -> setDiscount();
        
    }
    
    /**
     * Get USer's Name
     *
     * @return 
     */
    public function getName() {
        return $this -> name;
    }    

    /**
     * Get User's  Lastname
     *
     * @return 
     */
    public function getLastname() {
        return $this -> lastname;
    }    

    /**
     * Get User's  Username
     *
     * @return 
     */
    public function getUsername(){
        return $this -> username;
    }    

    /**
     * Get User's  Mail
     *
     * @return 
     */
    public function getMail(){
        return $this -> mail;
    }    

    /**
     * Get User's Card
     *
     * @return Card
     */
    public function getCard(){
        return $this -> card;
    }

    public function getDiscount(){
        return 'lo sconto applicato al tuo ordine sará del '. $this-> discount . ' % ';
    }

    /*  public function getCart()Cart {
        return $this -> cart;
    } */

    public function setDiscount(){
        ($this->is_registered = true) ? $this-> discount = 20 : $this -> discount = 0;
        return $this -> discount;
    }

    public function confirmOrder($product){
        if ($this -> discount !== 0) {
            $price = $product -> getPrice() * (1 - ($this -> discount)/100);
            return $price .'$';
        } else {
            return $price;
        }
    }

    public function setCard($card)
    {
        if (!$card instanceof Card) return false;
        $this->card = $card;
    }
}

?>