<?php
namespace App;

use App\Controllers\FormController;
use App\Controllers\OrderController;

class Router {
    private $formController;
    private $orderController;

    public function __construct() {
        $this->formController = new FormController();
        $this->orderController = new OrderController();
    }

    public function route() {
        $action = $_GET['action'] ?? '';
        $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

        if ($requestMethod === 'POST' && $action === 'order') {
            header('Content-Type: application/json');
            $response = $this->orderController->processOrder();
            echo json_encode($response);
            exit;
        } else {
            $data = $this->formController->getFormData();
            extract($data);
            include_once __DIR__ . '/views/order_view.php';
        }
    }
    
}