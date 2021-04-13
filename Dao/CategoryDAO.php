<?php 
    require "Database.php";
    include "../Emtity/Category.php";
    include_once "BaseDAO.php";


    class CategoryDAO extends BaseDAO
    {
        private static $instans;

        public static function getInstans()
        {
            if(empty(self::$instans))
            {
                self::$instans = new CategoryDAO();
            }
            return self::$instans;
        } 
    }
?>