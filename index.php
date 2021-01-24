<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;

$productController = new ProductController();

switch ($page){
    case 'listProduct':
        $productController->viewProducts();
        break;
    case 'add-listProduct':
        $productController->addProducts();;
        break;
    case 'edit-listProduct':
        $productController->editProduct();
        break;
    case 'deleteProduct':
        $productController->deleteProducts();
        break;
    default:
        $productController->viewProducts();
}