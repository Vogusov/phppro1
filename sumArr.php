<?php

/**
 * Сумма зачений массива
 *
 * @param array $array - Массив целых чисел
 * @return int | null
 */
function sumArr(array $array) {
    if (empty($array)) $sum = 0;
    $count = count($array);
    if ($count === 1) {
        $sum = $array[$count - 1];
    } else {
        $last_el = array_pop($array);
        $sum = $last_el + sumArr($array);
    }
    return $sum;
}

