<?php

$output = '';
for($i = 0; $i < 10; $i++) {
    if(($i + 1) == 10) {
        $output .= $i + 1;    
    } else {
        $output .= $i + 1 . '-';
    }
}
echo $output;