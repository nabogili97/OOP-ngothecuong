<?php


class Product
{
    public $id;
    public $name;
    public $categoryId;


    public function __contruct($id,$name,$categoryId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }
}   
?>