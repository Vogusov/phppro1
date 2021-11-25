<?php
/**
 * Создает массив заданной длинны из случайных чисел заданного диапазона
 *
 * @param int $count - Длинна массива
 * @param int $max - Максимальное значение элемента (минимальное - 0)
 * @return array
 */
function randomArray(int $count = 100, int $max = 1000): array{
    if (($count + 2) > $max) return ['error' => '$count should be less then $max+2'];
    $array = [];
    while (count($array) < $count) {
        $random = rand(0, $max);
        if (in_array($random, $array)) continue;
        $array[] = $random;
    }
return $array;
}

//print_r(randomArray());
