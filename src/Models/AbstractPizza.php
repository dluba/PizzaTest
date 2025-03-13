<?php
namespace App\Models;
use App\Config\Database;
use App\Interfaces\PizzatInterface;
use PDO;

abstract class AbstractPizza implements PizzatInterface {
    protected $id;
    protected $pizza;
    protected $size;
    protected $sauce;
    protected $price_usd;

    public function getId(): int { 

        return $this->id; 
    }

    public function getPizza(): string { 
        
        return $this->pizza; 
    }

    public function getSize(): string { 
        
        return $this->size; 
    }
    public function getSauce(): string { 
        
        return $this->sauce; 
    }
    
    public function getPriceUSD(): float { 
        
        return $this->price_usd; 
    }
    
}