<?php

for($i = 0; $i < 5; $i++) {
    $output = '*';
    for($j = 0; $j < $i; $j++) {
        $output .= '*';
    }
    echo $output . nl2br(PHP_EOL);
}