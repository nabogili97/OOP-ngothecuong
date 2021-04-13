<?php
require "../Emtity/Accessory.php";

    class AccessoryDemo 
    {
        public function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name; 
        }

        public function createAccessory()
        {
            $product = array("id" => 1, "name" => "tai nghe", "categoryId" => 1);

        }

        public function printAccessory($id, $name)
        {
            foreach ($product as $key => $item) {
                echo "Phu kien co ID : {$item->$id} , Ten phu kien: {$item->$name}";
            }
        }
    }
?>