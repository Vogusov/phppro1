<?php
include "findSmallest.php";

/**
 * Сортирует массив
 *
 * @param array $array
 * @return array
 */
function selectionSort(array $array): array
{
    $new_arr = [];
    $arr_len = count($array);
    for ($i = 0; $i < $arr_len; $i++) {
        $min_index = findSmallest($array);
        $new_arr[] = $array[$min_index];
        unset($array[$min_index]);
        $array = array_values($array);
    }
    return $new_arr;
}

