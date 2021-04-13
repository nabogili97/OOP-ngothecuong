<?php
    require "../Dao/Database.php";
    include "../Emtity/Product.php";

    class DatabaseDemo
    {   
        public function inisertTableTest()
        {
            $data = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("San pham so 2");
            $product->setCategoryId(2);
            $data->inserttable($product);
        }

        public function selectTableTest()
        {
            $data = Database::getInstants();
            return $data->selectTableTest("product");
        }

        public function updateTableTest()
        {
            $data = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("San pham so 2 da cap nhat");
            $product->setCategoryId(2);
            $data->inserttable($product);
        }

        public function deleteTableTest()
        {
            $data = Database::getInstants();
            $product = new Product();
            $product->setId(2);
            $product->setName("San pham so 2 da xoa");
            $product->setCategoryId(2);
            $data->inserttable($product);
        }

        public function initDatabase()
        {
            $data = Database::getInstants();
            for($i=1; $i<=10; $i++)
            {
                $product = new Product();
                $product->setId($i);
                $product->setName("San pham thu ".$i);
                $product->setCategoryId(2);
                $data->insertTable("product",$product);
            }

            for($i=1; $i<=10; $i++)
            {
                $categoty = new Category();
                $categoty->setId($i);
                $category->setName("Danh muc so ".$i);
                $data->inisertTable($category);
            }

            for($i=1; $i<=10; $i++)
            {
                $accessory = new Accessory();
                $accessory->setId($i);
                $accessory->setName("Quen truy cap  so : ".$i);
                $data->inisertTable($accessory);
            }
        }

        public function printTableTest()
        {
            echo $boj->getId()."<br>";
            echo $boj->getname()."<br>";
        }
    }

    $data_demo = new DatabaseDemo();

    // Hien thi
    $data_demo->initDatabase();
    echo "Database mac dinh <br>";
    foreach($data_demo->selectTableTest() as $key => $value)
    {
        $data_demo->printTable($value);
    }

    //Sua 
    $data_demo->updateTableTest();
    echo "Sau khi sua <br>";
    foreach($data_demo->updateTableTest() as $key => $value)
    {
        $data_demo->printTable($value);
    }

    //Xoa 
    $data_demo->deleteTableTest();
    echo "Sau khi xoa <br>";
    foreach ($data_demo as $key => $value) {
        $data_demo->printtable($value);
    }
?>