Write a program that prints the text "Hello *someone*" to the console with a callable function for each name given as argument to the executed script.
You must write this program with the array_walk function.

----------------------------------------------------------------------
## HINTS
To remove the first argument, you can use `array_shift` as following :
```php
array_shift($argv);
```

To execute a function (callable) for each element of an array, use array_walk as following :
```php
$function = function($argument) {
    echo "Argument is".$name;
};

$arguments = ["argument1", "argument2"];
array_walk($arguments, $function);
```

Documentation on the `array_walk function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-walk.php]()

Documentation on the `array_shift function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-shift.php]()

----------------------------------------------------------------------
