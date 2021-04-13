<?php
    include_once "BaseRow.php";
    class Product extends BaseRow
    {
        private $categoryId;
        public function setCategoryId($categoryId)
        {
            $this->categoryId = $categoryId;
        }

        public function getCategoryId()
        {
            return $this->categoryId;
        }
    }  
?>