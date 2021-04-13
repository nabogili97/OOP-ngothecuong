<?php 
    require "../Emtity/Accessory.php";
    require "Database.php";
    include_once "BaseDAO.php";

    class AccessoryDAO extends BaseDAO
    {   
        private static $instants;
        public static function getInstants()
        {
            if(empty(self::$instants))
            {
                self::$instants = new AccessoryDAO();
            }
            return self::$instants;
        }

        public function finAll()
        {
            $data = Database::getInstants();
            return $data->selectTable("accessory");
        }
    }
?>