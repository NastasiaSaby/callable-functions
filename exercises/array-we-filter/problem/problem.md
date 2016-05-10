Write a program that sort only the even numbers from the arguments.
You must write this program with the array_filter function.

----------------------------------------------------------------------
## HINTS

You can know if a number is an even number by divide it by 2 as following :
```php
if ($number %2 == 0) {
    echo $number."is an even number".
}
```

To filter elements from an array, use array_filter.
For instance to filter multiple of 3 numbers :
```php
$function = function($number) {
    return $number %3 == 0;
};

$numbers = [1, 2, 3, 4, 5, 6];
array_filter($numbers, $function);
```

Documentation on the `array_filter` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-filter.php]()

----------------------------------------------------------------------
