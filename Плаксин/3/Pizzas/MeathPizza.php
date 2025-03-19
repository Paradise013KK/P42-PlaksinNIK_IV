<?php

require_once 'Pizza.php';

class MeathPizza extends Pizza {
    public function __construct() {
        parent::__construct("4 мяса", "томатный", ["ветчина", "калбаски", "бекон"]);
    }
}