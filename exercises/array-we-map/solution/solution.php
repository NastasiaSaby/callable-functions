<?php
$function = function($name) {
    return '-'.$name.'-';
};

array_shift($argv);
$result = array_map($function, $argv);

print_r($result);