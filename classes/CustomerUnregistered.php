<?php 
include_once __DIR__ . './Customer.php';

class CustomerUnregistered extends Customer
{        
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(CreditCard $credit_card)
    {
        parent::__construct('Admin', 'Admin', null, null, null, 'generic@random.it', $credit_card);
    }
}


?>