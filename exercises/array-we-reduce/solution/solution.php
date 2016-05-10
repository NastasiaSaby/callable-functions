<?php
$function = function($output, $name) {
    return $output+$name;
};

array_shift($argv);
$result = array_reduce($argv, $function);

echo $result;