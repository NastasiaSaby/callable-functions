<?php
$arguments = $argv;
$function = function($name) {
    echo "Hello ".$name."\n";
};

array_shift($arguments);
array_walk($arguments, $function);
