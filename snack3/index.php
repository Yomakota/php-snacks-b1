<?php
## Snack 3
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numArray = [];
while (count($numArray) < 15) {
    $number = rand(1, 1000);

    //controllo se l'array non contenie lo stesso numero più di una volta
    if (!in_array($number, $numArray)) {

        // quindi lo "pusho"
        $numArray[] = $number;
    }
}
var_dump($numArray);
