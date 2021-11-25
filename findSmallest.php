<?php
/**
 * Нахождение индекса наименьшего значения в массиве
 *
 * @param array $array
 * @return int - Индекс наименьшего значения
 */
function findSmallest(array $array): int
{
    $smallest = $array[0];
    $smallest_index = 0;
    $arr_length = count($array);
    for ($i = 1; $i < $arr_length; $i++) {
        if ($array[$i] < $smallest) {
            $smallest = $array[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}

