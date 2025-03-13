<?php
namespace App\Interfaces;

interface PizzatInterface {
    public function getId(): int;
    public function getPizza(): string;
    public function getSize(): string;
    public function getSauce(): string;
    public function getPriceUSD(): float;
    public function getPriceBYN(): float;
    
}