<?php

class Database
{   
    private static $instants;
    private $productTable;
    private $categoryTable;
    private $accessoryTable;
    
    private function __construct()
    {
        $this->productTable = array();
        $this->categoryTable = array();
        $this->accessoryTable = array();
    
    }

    public static function getInstants()
    {
        if(empty(self::$instants))
        {
            echo " Da khoi tao DB";
            self::$instants = new Database();
        }
        return self::$instants;
    }

    public function insertTable($row)
    {   
        $data = [];
        
        if(!is_object($row))
        {
            return false;
        }
        else
        {
            switch ($name) {
            case 'product':
                $data = $this->productTable;
                break;
            
            case 'category':
                $data = $this->categoryTable;
                break;
            
            case 'accessory':
                $data = $this->accessoryTable;
                break;
            
            default:
                return -1;
                break;
            }
        }

        if(is_array($data))
        {
            return array_push($data,$row);
        }
    
    }

    public function selectTable($name, $where)
    {
        $data = [];

        switch ($name) {
            case 'product':
                $data = $this->productTable;
                break;
            
            case 'category':
                $data = $this->categoryTable;
                break;
            
            case 'accessory':
                $data = $this->accessoryTable;
                break;
            
            default:
                return -1;
                break;
        }

        $result = [];
        if(is_array($data))
        {
            if($where == null )
            {
                $result = $data;
            }
        }
        return $result;
    }

    public function updateTable($row)
    {
        $data = [];
        if(!is_object($row))
        {
            return false;
        }
        else
        {
            switch ($name) {
            case 'product':
                $data = $this->productTable;
                break;
            
            case 'category':
                $data = $this->categoryTable;
                break;
            
            case 'accessory':
                $data = $this->accessoryTable;
                break;
            
            default:
                return -1;
                break;
        }
        $a = -1;
        foreach ($table as $key => $value)
        {
            if($value->getId() == $row->getId())
            {
                $a = $key;
                break;
            }
        }
        if($a != -1)
        {
            $data[$a] = $row;
        }
        }
    }

    public function deleteTable()
    {
        $data = [];

        if(!is_object($row))
        {
            return false;
        }
        else
        {
            switch ($name) {
            case 'product':
                $data = $this->productTable;
                break;
            
            case 'category':
                $data = $this->categoryTable;
                break;
            
            case 'accessory':
                $data = $this->accessoryTable;
                break;
            
            default:
                return -1;
                break;
        }
        $a = -1;
        foreach ($date as $key => $value) {
            if($value->getId() == $row->getId())
            {
                $a = $key;
                break;
            }
        }
        array_splice($data,$a,1);
        }
    }

    public function truncateTable()
    {
        $data = [];

        switch ($name) {
            case 'product':
                $data = $this->productTable;
                break;
            
            case 'category':
                $data = $this->categoryTable;
                break;
            
            case 'accessory':
                $data = $this->accessoryTable;
                break;
            
            default:
                return -1;
                break;
        }

    }
}
?>