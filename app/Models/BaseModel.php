<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "buoi2_php";
        $username = "root";
        $password = "";

        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Hệ thống đang bảo trì, vui lòng quay lại sau";
            exit();
        }
    }
}
