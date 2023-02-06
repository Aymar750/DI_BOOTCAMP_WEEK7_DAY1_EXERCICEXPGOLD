<?php
// Class to represent a product
class Product{
    // Properties to store product name, description, and price
    public $name;
    public $description;
    public $price;

    // Constructor to set the product name
    public function __construct($name){
        $this->name = $name;
    }

}

// Create an instance of the Product class with the name "iPhone14"
$product1 = new Product("iPhone14");

// Display the name of the first product
echo "Le nom du premier produit est : " .$product1->name;

// Create another instance of the Product class with the name "iPhone14 Pro"
$product2 = new Product("iPhone14 Pro");

// Display the name of the second product
echo "Le nom du second produit est : " .$product2->name;
?>
