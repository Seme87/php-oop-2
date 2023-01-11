<?php
require_once __DIR__."/traits/Name.php";

class Product {
    use Name;
    public $price;
    public $category;
    public $immagine;

    public function __construct($name, $price, $category, $immagine)
    {
        $this->name= $name;
        $this->price=$price;
        $this->category= $category;
        $this->immagine=$immagine;
    }
}
?>