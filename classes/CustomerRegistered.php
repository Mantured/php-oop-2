<?php 

include_once __DIR__ . './Customer.php';

class CustomerRegistered extends Customer
{
    private float $discount = 20;

    
    /**
     * __construct
     *
     * @param  mixed $firstName
     * @param  mixed $lastName
     * @param  mixed $username
     * @param  mixed $password
     * @param  mixed $birthDay
     * @param  mixed $mail
     * @param  mixed $credit_card
     * @param  mixed $deliveryAddress
     * @return void
     */
    public function __construct(string $firstName, string $lastName, $username, string $password, string $birthDay, string $mail, CreditCard $credit_card, $deliveryAddress)
    {
        parent::__construct($firstName, $lastName,$username ,$password, $birthDay, $mail, $credit_card, $deliveryAddress);
    }

}











?>