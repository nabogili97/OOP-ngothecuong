<?php 
    require "../Emtity/Product.php";
    require "../Dao/Database.php";

    class ProductDAODemo
    {
        public function insertTest()
        {
            $data = Database::getInstants();
            $product = new Product();
            $product->setId(1);
            $product->setName("San pham so 1");
            $product->setCategoryId(1);
            return $data->insertTable($product);
        }

        public function updateTest()
        {
            $data = Database::getInstants();
            $product = new Product();
            $product->setId(1);
            $product->setName("San pham so 1 da update");
            $product->setCategoryId(1);
            return $data->insertTable($product);
        }

        public function finAllTest()
        {
            $data = Database::getInstans();
            return $data->selectTable('product');
        }
    }

    $pro = new ProductDAODemo();
    $pro->insertTest();
    echo "Du lieu <br>";
    var_dump($pro->finAllTest());

    $pro->updateTest();
    echo "Du lieu <br>";
    var_dump($pro->finAllTest());
?>