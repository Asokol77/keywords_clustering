#!/usr/bin/php
<?php

fscanf(STDIN, "%d/n", $number1);
fscanf(STDIN, "%d/n", $number2);

if ($number2 === 0){
    fwrite(STDERR, "На ноль дельить нельзя!" . PHP_EOL);
}
else {
    fwrite(STDOUT, $number1 / $number2);
}

?>

