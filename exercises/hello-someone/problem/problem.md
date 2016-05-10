Write a program that prints the text "Hello *someone*" to the console with a callable function where someone is the name given as the first argument to the executed script.

----------------------------------------------------------------------
## HINTS

You can get the arguments using the $argv array.

Note that the first element of $argv is always the name of the executed script.
To get the first argument given to the executed script, you must use $argv[1];

A callable function in PHP with arguments can be used as that :

```php
$argument = "Foo";

$var = function() use ($argument){
   echo "Argument is ".$argument;
};

$var();
```

Documentation on the `Callable function` can be found by pointing your browser here:
  [http://php.net/manual/en/language.types.callable.php]()

----------------------------------------------------------------------
