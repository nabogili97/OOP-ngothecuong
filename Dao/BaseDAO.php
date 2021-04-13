<?php 
    require "Database.php";
    include_once "../Emtity/Accessory.php";
    include_once "../Emtity/Category.php";
    include_once "../Emtity/Product.php";

    abstract class BaseDAO
    {
        public function insert($row)
        {
            $data = Database::getInstants();
            $check = $data->insertTable($row);
            if($check == -1)
            {
                return false;
            }
            return true;
        }

        public function update()
        {
            $data = Database::getInstants();
            $check = $data->insertTable($row);
            if($check == -1)
            {
                return false;
            }
            return true;
        }

        public function delete()
        {
            $data = Database::getInstants();
            $check = $data->insertTable($row);
            if($check == -1)
            {
                return false;
            }
            return true;
        }
    }
?>