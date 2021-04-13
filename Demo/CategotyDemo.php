<?php
    require "../Emtity/Category.php";

    class CategoryDemo 
    {
        public function __construct($id,$name)
        {
            $this->id = $id;
            $this->name = $name;
        }
        
        public function createCategory()
        {   
            $category = new Category();
            $category = setId("1");
            $category = setName("San pham ");
        }

        public function printCategoty($category)
        {
            if(empty($category))
            {
                echo $category->getId();
                echo $category->getName();
            }
            
        }
    }
?>