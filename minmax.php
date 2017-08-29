<?php

$marks1 = array(360,310,310,330,313,375,456,111,256); 
$marks2 = array(350,340,356,330,321); 
$marks3 = array(630,340,570,635,434,255,298); 

$merged = array_merge($marks1, $marks2, $marks3);

$min = $merged[0];
$max = 0;

foreach($merged as $value) {
    if($value < $min) {
        $min = $value;
    }
    
    if($value > $max) {
        $max = $value;
    }
}

echo sprintf('Maxiumum marks: %d', $max);
echo nl2br(PHP_EOL);
echo sprintf('Minimum marks: %d', $min);