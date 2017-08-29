<?php

$usage = memory_get_usage();
echo $usage . ' bytes' . nl2br(PHP_EOL);
echo bcdiv($usage, 1024) . ' kb' . nl2br(PHP_EOL);
echo bcdiv($usage, pow(1024, 2), 2) . ' mb' . nl2br(PHP_EOL);