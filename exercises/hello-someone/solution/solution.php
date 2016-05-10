<?php

$var = function() use($argv) {
    echo "Hello ".$argv[1];
};

$var();