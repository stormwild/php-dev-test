<?php

$str = str_split('0123456789abcdefghijklmnopqrstuvwxyz');
$result = '';

shuffle($str);

foreach(array_rand($str, 11) as $k) {
    $result .= $str[$k];
}

echo 'Random: ' . $result . nl2br(PHP_EOL);
