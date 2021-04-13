<?php 
    require "../Emtity/Product.php";
    require "Database.php";
    include_once "BaseDAO.php";

    class ProductDAO extends BaseDAO
    {
        private static $instans;

        public static function getInstans()
        {
            if(empty(self::$instans))
            {
                self::$instans = new ProductDAO();
            }
            return self::$instans;
        }

        public function finAll()
        {   
            $data = Database::getInstans();
            return $data->selectTable('product');
        }
    }
?>