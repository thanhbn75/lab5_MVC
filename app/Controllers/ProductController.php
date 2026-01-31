<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $model = new Product();
        $products = $model->all();
        require __DIR__ . '/../../views/product-list.php';
    }

    public function create() {
        require __DIR__ . '/../../views/product-add.php';
    }

    public function store() {
        $model = new Product();
        $model->insert($_POST);
        header("Location: index.php?page=product-list");
    }

    public function edit() {
        $model = new Product();
        $product = $model->find($_GET['id']);
        require __DIR__ . '/../../views/product-edit.php';
    }

    public function update() {
        $model = new Product();
        $model->update($_POST['id'], $_POST);
        header("Location: index.php?page=product-list");
    }

    public function delete() {
        $model = new Product();
        $model->delete($_GET['id']);
        header("Location: index.php?page=product-list");
    }
}
