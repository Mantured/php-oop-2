<?php 

class Cart 
{
    private array $products;



    public function __construct()
    {
        $this -> products = [];
    }

    public function addProductToCart(Product $product): void
    {
        array_push($this -> products, $product);
    }

    public function getProducts(): array
    {
        return $this -> products;
    }

    public function getTotalAmount(): float
    {
        $amount = 0.0;

        foreach ($this->products as $product) {
            $amount += $product -> getPrice(); 
        }
        return $amount;
    }

}


?>