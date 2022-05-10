<?php 
class Product
{
    protected string $name;
    protected string $genre;
    protected string $category;
    protected string $description;
    protected float $price;
    protected $serialNumber;

        
    /**
     * __construct
     *
     * @param  string $name Product's name
     * @param  string $genre Product's genre
     * @param  string $category Category about Product
     * @param  string $description Description of single Product
     * @param  float $price Price's Product
     * @param  $serialNumber Unique serial numbers of Product
     */
    public function __construct(string $name, string $genre, string $category, string $description, float $price, $serialNumber = null)
    {
        $this -> name = $name;
        $this -> genre = $genre;
        $this -> category = $category;
        $this -> description = $description;
        $this -> setPrice($price);
        /* $this -> setSerialNumber($serialNumber); */
        $this -> setSerialNumber($serialNumber);
    }
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this -> name;
    }

        
    /**
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName(string $name)
    {
        return $this -> name = $name;
    }

        
    /**
     * getGenre
     *
     * @return string
     */
    public function getGenre(): string
    {
        return $this -> genre;
    }

        
    /**
     * setGenre
     *
     * @param  string $genre
     * 
     */
    public function setGenre(string $genre)
    {
        return $this -> genre = $genre;
    }

        
    /**
     * getCategory
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this -> category;
    }

        
    /**
     * setCategory
     *
     * @param  string $category
     */
    public function setCategory(string $category)
    {
        return $this -> category = $category;
    }

        
    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this -> description;
    }

        
    /**
     * setDescription
     *
     * @param  string $description
     */
    public function setDescription(string $description)
    {
        return $this -> description = $description;
    }

        
    /**
     * getPrice
     *
     * @return $price
     */
    public function getPrice()
    {
        return $this -> price . ' $';
    }

        
    /**
     * setPrice
     *
     * @param  mixed $price
     * @return float
     */
    public function setPrice(float $price)
    {
        return $this -> price = round($price, 2);
    }

        
    /**
     * getSerialNumber
     *
     * @return int
     */
    public function getSerialNumber(): string
    {
        return $this -> serialNumber;
    }

        
    /**
     * setSerialNumber
     *
     * @param  mixed $serialNumber
     * @return void
     */
    public function setSerialNumber($serialNumber)
    {
        /* $serialNumber_length = strlen((string)$serialNumber);
        if($serialNumber_length <= 10){
            return $this -> serialNumber = $serialNumber;
        }
        else {
            return $this -> serialNumber = 'invalid number';
        } */
        $serialNumber = uniqid();
        return $this -> serialNumber = $serialNumber;
    }
}
?>