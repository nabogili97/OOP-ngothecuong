<?php 
    require "../Dao/Database.php";

    class CategoryDAODemo
    {
        public function insertTest()
        {
            $data = Database::getInstans();
            $category = new Category();
            $category->setId(2);
            $category->setName("Danh muc so 1");
            $data->insertTable($category);
        }

        public function finAllTest()
        {
            $data = Database::getInstans();
            return $data->selectTable('category');

        }

        public function updateTest()
        {
            $data = Database::getInstans();
            $category = new Category();
            $category->setId(1);
            $category->setName("Danh muc so 1 da sua");
            $data->updateTable($category);
        }
    }

    $cateDAO = new CategoryDAODemo();
    $cateDAO->insertTest();
    echo "Show du lieu <br>";
    var_dump($cateDAO->finAllTest());

    $cateDAO->updateTest();
    echo "Du lieu <br>";
    var_dump($cateDAO->finAllTest());

?>