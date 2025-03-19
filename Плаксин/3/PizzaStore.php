<?php

class PizzaStore {
    public function orderPizza($type) {
        $pizza = $this->createPizza($type);

        if ($pizza) {
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "Такой пиццы нет в меню.\n";
        }
    }

    protected function createPizza($type) {
        switch ($type) {
            case 'pepperoni':
                return new Pizza("Пепперони", "томатный", ["пепперони", "сыр", "перец"]);
            case 'meath':
                return new Pizza("4 мяса", "томатный", ["ветчина", "калбаски", "бекон"]);
            case 'pivo':
                return new Pizza("Пивная", "светлая", ["хмель", "дрожжи", "мясо"]);
            default:
                return null;
        }
    }
}