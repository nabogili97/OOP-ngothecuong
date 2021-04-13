<?php
require '../Emtity/Product.php';

    class ProductDemo 
    {
        public function __construct($id, $name, $categoryId)
        {
            $this->id = $id;
            $this->name = $name;
            $this->categoryId = $categoryId;
        }

        public function createProductTest()
        {
            $product = new Product();
            $product = setId("1");
            $product = setName("San pham ");
            $product = setcategoryId("1");
            
        }

        public function printProduct($product)
        {
            if(isset($product))
            {
                echo $product->getId();
                echo $product->getName();
                echo $product->getCategoryId();
            }
        }
    } 
?>