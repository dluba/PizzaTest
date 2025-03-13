<?php
namespace App\Models;

class Converter {
    private $rate;

    public function __construct() {
        $this->rate = $this->fetchRate();
    }

    private function fetchRate(): float {
        $url = "https://api.nbrb.by/exrates/rates/431";
        $response = @file_get_contents($url);
        $data = json_decode($response, true);

        return $data['Cur_OfficialRate'] ?? 3.17; // 3,17 курс 13.03.2025 
    }

    public function convertUSDToBYN(float $priceUSD): float {

        return $priceUSD * $this->rate;
    }
    
}