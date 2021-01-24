<?php


namespace App\Controller;
use App\Model\CategoryManager;
use App\Model\Category;


class CategoryController
{
    protected $CategoryManager;

    public function __construct()
    {
        $this->CategoryManager = new CategoryManager();
    }

    public function viewCategory()
    {
        $data = $this->CategoryManager->getAllCategory();
    }
}