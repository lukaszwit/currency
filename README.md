Currency introduces strictly typed and precision safe containers to work with currencies. It ensures that once any amount in currency is defined you cannot changed it's type.
Internally this lib uses SplType extension and SplString class. Keeping amounts in string prevents from floats problems and lets you use high precision libraries like bcMath to process arithmetic operations.  

```php
<?php
use Currency\Eur;

$eur = new Eur;
$eur = '10'; // this is OK

$eur = 10; // but this emits UnexpectedValueException


```

see more examples in examples directory.