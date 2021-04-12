<?php
require '../Emtity/Product.php';

    class ProductDemo extends Product
    {
        public function __contruct($id, $name, $categoryId)
        {
            $this->id = $id;
            $this->name = $name;
            $this->categoryId = $categoryId;
        }

        public function createProductTest()
        {
            $product = array("id" => 1, "name" => "iphone 12", "categoryId" => 1);
            
        }

        public function printProduct($id, $name, $categoryId)
        {
            foreach ($product as $key => $item) {
                echo "San pham cos ID : {$item->$id} , Ten san pham : {$item->$name}, Ma danh muc : {$item->$categoryId} ";
            }
        }
    } 
?>