Write a program that transforms the arguments given by surrounding them by "-" and print the array.
For instance, for the argument "argument", you will get "-argument-".

You must write this program with the array_map function.

----------------------------------------------------------------------
## HINTS
You can use `print_r` to print an array.

To transform each element of the array, use `array_map` as following :

```php
$function = function($argument) {
    return $argument.'.suffix';
};

$arguments = ['argument1', 'argument2'];
$result = array_map($function, $arguments);
```

Documentation on the `array_map function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-map.php]()

----------------------------------------------------------------------
