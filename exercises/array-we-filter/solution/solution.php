<?php
$function = function($number) {
    return $number %2 == 0;
};

array_shift($argv);
$result = array_filter($argv, $function);

print_r($result);