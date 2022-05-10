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

        

    public function getName(){
        return $this -> name;
    }
    public function setName( string$name)
    {
        return $this -> name = $name; 
    }
    public function getGenre(){
        return $this -> genre;
    }
    public function setGenre(string $genre)
    {
        return $this -> genre = $genre; 
    }
    public function getCategory(){
        return $this -> category;
    }
    public function setCategory( string $category)
    {
        return $this -> category = $category; 
    }
    public function getPrice(){
        return $this -> price;
    }
    public function setPrice( float $price)
    {
        return $this -> price = $price; 
    }
}
?>