<?php


namespace App\Model;


class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM Products";
        $data = $this->dbConnect->query($sql);
        $products = [];
        foreach ($data as $item){
            $products[] = new Products($item['id'],$item['name'],$item['categoryId'],$item['price'],$item['description']);
        }
        return $products;
    }

    public function addProducts($product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $categoryId = $product->getCategoryId();
        $price = $product->getPrice();
        $description = $product->getDescription();

        $sql = "INSERT INTO `Products`(`id`, `name`, `categoryId`, `price`, `description`) VALUES ('$id','$name','$categoryId','$price','$description')";
        $this->dbConnect->execute($sql);
    }

    public function deleteProducts($id)
    {
        $sql = "DELETE FROM `Products` WHERE id = '$id'";
        $this->dbConnect->execute($id);
    }

    public function updateProducts($id,$product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $categoryId = $product->getCategoryId();
        $price = $product->getPrice();
        $description = $product->getDescription();

        $sql = "UPDATE `Products` SET `id`='$id',`name`='$name',`categoryId`='$categoryId',`price`= '$price',`description`='$description' WHERE id = '$id'";
        $this->dbConnect->execute($sql);
    }

    public function getProducts($id)
    {
        $sql = "SELECT * FROM Products WHERE id = '$id'";
        return $this->dbConnect->query($sql);
    }
}