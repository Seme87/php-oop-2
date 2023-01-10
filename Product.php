<?php

class Product {
    public $name;
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