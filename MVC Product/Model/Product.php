<?php

    namespace Model;
    
    class Product
    {   
        public $productName;
        public $productLine;
        public $productVendor;
        public $description;
        public $quantity;
        public $price;

        public function __construct( $productName, $productLine, $productVendor, $description, $quantity, $price)
        {
            $this->productName = $productName;
            $this->productLine = $productLine;
            $this->productVendor = $productVendor;
            $this->description = $description;
            $this->quantity = $quantity;
            $this->price = $price;
        }
    }