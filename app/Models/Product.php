<?php
namespace App\Models;

use PDO;

class Product extends BaseModel
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
