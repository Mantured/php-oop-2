<?php 

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected string $ingredients;
    protected string $environmentalImpact;
    
    public function __construct($name, $genre, $category, $price, string $ingredients, int $environmentalImpact)
    {
        parent::__construct($name, $genre,  $category, $price);
        $this -> ingredients = $ingredients;
        $this -> environmentalImpact = $environmentalImpact;
    }

    public function getIngredients()
    {
        return $this -> ingredients;
    }
    public function getEnvironmentalImpact()
    {
        return 'per poter produrre i '. $this -> name .', abbiamo emesso ' . $this -> environmentalImpact . '% di cO2 in meno rispetto alla brutta e cattiva Amazon';
    }
} 

    /* i can set ingredients too with setter but is not time too  */
?>