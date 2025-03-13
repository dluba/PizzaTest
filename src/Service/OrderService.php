<?php
namespace App\Service;

use App\Config\Database;
use App\Models\Pizza;
use PDO;
class OrderService {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllPizzas(): array {
        $stmt = $this->db->query("SELECT DISTINCT pizza FROM pizza_order");

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getAllSizes(): array {
        $stmt = $this->db->query("SELECT DISTINCT sizes FROM pizza_order");

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getAllSauces(): array {
        $stmt = $this->db->query("SELECT DISTINCT sauce FROM pizza_order");

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getByCombination(string $pizza, string $size, string $sauce): ?Pizza {
        $stmt = $this->db->prepare("SELECT * FROM pizza_order WHERE pizza = :pizza AND sizes = :sizes AND sauce = :sauce");
        $stmt->execute(['pizza' => $pizza, 'sizes' => $size, 'sauce' => $sauce]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data ? new Pizza($data) : null;
    }

}