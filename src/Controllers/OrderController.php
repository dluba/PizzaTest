<?php
namespace App\Controllers;

use App\Service\OrderService;
use App\Models\Calculator;

class OrderController {
    private $orderService;
    private $calculator;

    public function __construct() {
        $this->orderService = new OrderService();
        $this->calculator = new Calculator();
    }

    public function processOrder(): array {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

            return ['error' => 'Invalid request method'];
        }

        $pizza = filter_input(INPUT_POST, 'pizza');
        $size = filter_input(INPUT_POST, 'sizes');
        $sauce = filter_input(INPUT_POST, 'sauce');

        
        $pizza = $this->orderService->getByCombination($pizza, $size, $sauce);
        if (!$pizza) {

            return ['error' => 'Invalid selection'];
        }

        $totalPriceBYN = $this->calculator->calculateTotal($pizza);
        
        return ['data' => [
                'pizza' => $pizza->getPizza(),
                'size' => $pizza->getSize(),
                'sauce' => $pizza->getSauce(),
                'total_byn' => number_format($totalPriceBYN, 2, '.', '')
            ]
        ];
    }

}