<?php

class TGBot
{
    /**
     * PHP Telegram Bot Class
     *
     * @copyright  2024 MH Farahmand
     * @license    MIT License
     * @version    Release: v1.0
     */ 
    
    private $token;
    private $endpoint = "https://api.telegram.org/bot";

    public function __construct($token) {
        $this->token = $token;
    }

    private function request() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

}
