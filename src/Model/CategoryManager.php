<?php


namespace App\Model;
use App\Model\Category;
use App\Model\DBConnect;



class CategoryManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM Category";
        $data = $this->dbConnect->query($sql);
        $category= [];
        foreach ($category as $item){
            $category[] = new Category($item['id'],$item['name']);
        }
        return $category;
    }
}