<?php
require_once __DIR__."/Product.php";

class Kennel extends Product {
    public $tipology;

    public function __construct($name, $price, $category, $immagine, $tipology)
    {
       parent::__construct($name,$price,$category,$immagine);
       $this->tipology=$tipology;
       

    }
};