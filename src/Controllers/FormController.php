<?php
namespace App\Controllers;

use App\Service\OrderService;

class FormController {
    private $orderService;

    public function __construct() {
        $this->orderService = new OrderService();
    }

    public function getFormData(): array {
        
        return [
            'pizzas' => $this->orderService->getAllPizzas(),
            'sizes' => $this->orderService->getAllSizes(),
            'sauces' => $this->orderService->getAllSauces()
        ];
    }

}