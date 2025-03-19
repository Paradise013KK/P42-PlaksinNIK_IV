<?php

require_once 'Pizza.php';

class PivoPizza extends Pizza {
    public function __construct() {
        parent::__construct("Пивная", "светлая", ["хмель", "дрожжи", "мясо"]);
    }
}