<?php

/**
 * Список директорий в заданной папке
 *
 * @param string $path  - Путь к папке
 * @return array - Список директорий в папке $path
 */
function scanDir(string $path) {
    $dir = opendir($path);
    $filenames = [];
    while ($filename = readdir($dir)) {
        if ($filename === '.' || $filename === '..') continue;
        if (is_dir("$path/$filename")) {
            $filenames[] = $filename;
            scanDir($path);
            var_dump("$path/$filename");
        }
    }
    return $filenames;
}