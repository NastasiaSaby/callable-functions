<?php
array_shift($argv);

function sortFromSmallestToGreatest($a, $b)
{
    return ($a < $b) ? false : true;
}

usort($argv, "sortFromSmallestToGreatest");

print_r($argv);
