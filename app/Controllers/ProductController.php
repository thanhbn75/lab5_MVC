<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index() {
        $products = (new Product())->all();
        require __DIR__ . '/../../views/product-list.php';
    }

    public function detail() {
        $product = (new Product())->find($_GET['id']);
        require __DIR__ . '/../../views/product-detail.php';
    }

    public function create() {
        require __DIR__ . '/../../views/product-add.php';
    }

    public function edit() {
        $product = (new Product())->find($_GET['id']);
        require __DIR__ . '/../../views/product-edit.php';
    }

    public function delete() {
        (new Product())->delete($_GET['id']);
        header("Location: index.php?page=product-list");
    }

    public function store() {
        (new Product())->insert($_POST);
        header("Location: index.php?page=product-list");
    }

    public function update() {
        (new Product())->update($_GET['id'], $_POST);
        header("Location: index.php?page=product-list");
    }
}
