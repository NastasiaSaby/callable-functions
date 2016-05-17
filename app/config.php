<?php

use function DI\factory;
use function DI\object;
use PhpSchool\CallableFunctions\Exercise\HelloWorld;
use PhpSchool\CallableFunctions\Exercise\HelloSomeone;
use PhpSchool\CallableFunctions\Exercise\PeaceWalk;
use PhpSchool\CallableFunctions\Exercise\ArrayWeMap;
use PhpSchool\CallableFunctions\Exercise\ArrayWeReduce;
use PhpSchool\CallableFunctions\Exercise\ArrayWeFilter;
use PhpSchool\CallableFunctions\Exercise\SortYourArray;

return [
    HelloWorld::class   => object(HelloWorld::class),
    HelloSomeone::class   => object(HelloSomeone::class),
    PeaceWalk::class   => object(PeaceWalk::class),
    ArrayWeMap::class   => object(ArrayWeMap::class),
    ArrayWeReduce::class   => object(ArrayWeReduce::class),
    ArrayWeFilter::class   => object(ArrayWeFilter::class),
    SortYourArray::class   => object(SortYourArray::class),
];
