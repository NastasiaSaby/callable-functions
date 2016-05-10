Write a program that gives the sum of the arguments given and print the result.
You must write this program with the array_reduce function.

----------------------------------------------------------------------
## HINTS
To reduce the elements of an array to one result, use `array_reduce` as following :

```php
$function = function($output, $argument) {
    return $output*$argument;
};

$arguments = [1, 2, 3];
$result = array_reduce($arguments, $function);
```

Documentation on the `array_reduce function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-reduce.php]()

----------------------------------------------------------------------
