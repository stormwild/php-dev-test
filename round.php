<?php

/*
1.65 --> 1.7
1.65 --> 1.6
-1.54 --> -1.5
*/

echo '1.65' . ' --> ' . round(1.65, 1) . nl2br(PHP_EOL);
echo '1.65' . ' --> ' . round(1.65, 1, PHP_ROUND_HALF_DOWN) . nl2br(PHP_EOL);
echo '-1.54' . ' --> ' . round(-1.54, 1, PHP_ROUND_HALF_DOWN) . nl2br(PHP_EOL);

