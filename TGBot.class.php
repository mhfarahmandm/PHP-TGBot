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

}
