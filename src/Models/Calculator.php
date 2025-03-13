<?php
namespace App\Models;

use App\Interfaces\PizzatInterface;

class Calculator {
    public function calculateTotal(PizzatInterface $pizza): float {

        return $pizza->getPriceBYN();
    }
    
}