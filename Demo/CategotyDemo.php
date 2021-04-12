<?php

    require "../Emtity/Category.php";

    class CategoryDemo extends Category
    {
        public function __contruct($id,$name)
        {
            $this->id = $id;
            $this->name = $name;
        }

        public function createCategory()
        {   
            $category = array("id" => 1, "name" => "iphone" );
        }

        public function printCategoty($id,$name)
        {
            foreach($category as $key => $item)
            {
                echo " Danh muc co ID : {$item->$id} va Ten danh muc {$item->$name}";
            }
            
        }
    }

?>