<?php
/**
 * Функция бинарного поиска
 * Принимает упорядоченный массив чисел и искомое число
 * Возвращает позицию искомого числа в массиве или null, если такого числа нет.
 *
 * @param $array - Упорядоченный массив
 * @param $item - Искомая величина
 * @return int|null
 */
function binarySearch(array $array, int $item)
{
    $low = 0;
    $high = count($array) - 1;
    while ($low < $high) {
        $mid = (int)(($low + $high) / 2);
        $guess = $array[$mid];
        if ($guess === $item) {
            return $mid;
        }
        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}