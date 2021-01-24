<?php

namespace App\Controller;

use App\Model\Products;
use App\Model\ProductManager;

class ProductController
{
    protected $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
    }

    public function viewProducts()
    {
        $products = $this->productManager->getAllProduct();
        include_once 'src/View/listProduct.php';
    }

    public function addProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-listProduct.php';
        }else{
            $id = $_POST['id'];
            $name = $_POST['name'];
            $categoryId = $_POST['categoryId'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $product = new Products($id,$name,$categoryId,$price,$description);
            $this->productManager->addProducts($product);
            header('location: index.php');
        }
    }

    public function deleteProducts()
    {
        $id = $_REQUEST['id'];
        $this->productManager->deleteProducts($id);
        header('location: index.php');
    }

    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $categoryId = $_POST['categoryId'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $product = new Products($id,$name,$categoryId,$price,$description);
            $this->productManager->updateProducts($id,$product);
            header('location: index.php');
        }
        $id = $_REQUEST['id'];
        $product = $this->productManager->getProducts($id);
        include_once 'src/View/edit-listProduct.php';
    }
}