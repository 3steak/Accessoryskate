<?php
include "module/category/model_category.php";

class HomeControler
{
    public $modelCategories;
    public $categories = [];

    function __construct()
    {
        $this->modelCategories = new ModelCategory();
        $this->getCategories();
    }

    public function getCategories()
    {

        $categoriesWitoutId = $this->modelCategories->getAll();
        $ar = [];
        foreach ($categoriesWitoutId as $category) {
            unset($category['id']);
            array_push($ar, $category);
        }

        $this->categories = $ar;
    }
}
