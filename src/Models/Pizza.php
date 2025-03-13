<?php
namespace App\Models;
use PDO;
use App\Config\Database;

class Pizza extends AbstractPizza {
    private $price_byn;
    private $converter;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->pizza = $data['pizza'];
        $this->size = $data['sizes'];
        $this->sauce = $data['sauce'];
        $this->price_usd = $data['price_usd'];
        $this->converter = new Converter();
        $this->price_byn = $this->converter->convertUSDToBYN($data['price_usd']);
    }

    public function getPriceBYN(): float {
        
        return $this->price_byn;
    }

    public static function getAllPizzas(): array {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT DISTINCT pizza FROM pizza_order");
        
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getAllSizes(): array {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT DISTINCT sizes FROM pizza_order");
        
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getAllSauces(): array {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT DISTINCT sauce FROM pizza_order");
        
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function getByCombination(string $pizza, string $size, string $sauce): ?Pizza {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM orders WHERE pizza = :pizza AND size = :size AND sauce = :sauce");
        $stmt->execute(['pizza' => $pizza, 'size' => $size, 'sauce' => $sauce]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        

        return $data ? new Pizza($data) : null;
    }
    
}