<?php 

include_once __DIR__ . '/Product.php';

/* mi creo un array per inserire i prodotti e fare la somma del carrello in base al prezzo del singolo product*/

class Cart {

    protected array $products;

    public function __construct($products)
    {
        $this -> products = [];
    }

    public function testingCart(Product $product){
        array_push($this->products, $product);
    }

    public function getProducts(){
        return $this -> products;
    }


}





















?>