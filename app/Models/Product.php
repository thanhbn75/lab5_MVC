<?php
namespace App\Models;

class Product extends BaseModel {

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function insert($data) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO products(name, price, image, description)
             VALUES (?, ?, ?, ?)"
        );
        return $stmt->execute([
            $data['name'],
            $data['price'],
            $data['image'],
            $data['description']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare(
            "UPDATE products SET name=?, price=?, image=?, description=? WHERE id=?"
        );
        return $stmt->execute([
            $data['name'],
            $data['price'],
            $data['image'],
            $data['description'],
            $id
        ]);
    }
}
