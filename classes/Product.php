<?php 
class Product {
    protected string $name;
    protected string $genre;
    protected string $category;
    protected float $price;
    
    /**
     * product construct
     *
     * @param  mixed $name the Product's name
     * @param  mixed $genre
     * @param  mixed $category
     * @param  mixed $price
     * @return void
     */
    public function __construct(string $name, string $genre, string $category, float $price)
    {
        $this -> name = $name;
        $this -> genre = $genre;
        $this -> category = $category;
        $this -> price = $price;
    }

        
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string {
        return $this -> name;
    }

    
    /**
     * getGenre animal
     *
     * @return string
     */
    public function getGenre(): string {
        return $this -> genre;
    }

    
    /**
     * getCategory product by animal
     *
     * @return string
     */
    public function getCategory(): string {
        return $this -> category;
    }
    
    
    /**
     * getPrice
     *
     * @return float
     */
    public function getPrice(): float {
        return $this -> price;
    }

}
?>