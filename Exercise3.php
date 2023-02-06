<?php
// Class to represent a product
class Product{
    // Properties to store product name, description, and price
    public $name;
    public $description;
    public $price;

    // Constructor to set the product name, description, and price
    public function __construct($name, $description, $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

}

// Create an instance of the Product class with the name "iPhone 12", description, and price
$product1 = new Product('iPhone 12', 'This is a great iPhone', 799.99);

// Display the price of the first product
echo $product1->price;

// Create another instance of the Product class with the name "iPhone 12 Pro", description, and price
$product2 = new Product('iPhone 12 Pro', 'This is a greatest iPhone', 1999.99);

// Display the price of the second product
echo $product2->price;
?>
