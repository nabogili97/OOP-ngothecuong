<?php
    class Category
    {
        public $id;
        public $name;
   

    public function __contruct($id,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function setId()
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
 }
?>