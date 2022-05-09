<?php 
class Product {
    protected  $name;
    protected  $genre;
    protected  $category;
    protected  $price;
    
    /**
     * product construct
     *
     * @param  mixed $name the Product's name
     * @param  mixed $genre
     * @param  mixed $category
     * @param  mixed $price
     * @return void
     */
    public function __construct( $name,  $genre,  $category,  $price)
    {
        $this -> name = $name;
        $this -> genre = $genre;
        $this -> category = $category;
        $this -> price = $price;
    }

        
    /**
     * getName
     *
     * @return 
     */
    public function getName(){
        return $this -> name;
    }

    
    /**
     * getGenre animal
     *
     * @return 
     */
    public function getGenre(){
        return $this -> genre;
    }

    
    /**
     * getCategory product by animal
     *
     * @return 
     */
    public function getCategory(){
        return $this -> category;
    }
    
    
    /**
     * getPrice
     *
     * @return 
     */
    public function getPrice(){
        return $this -> price;
    }

}
?>