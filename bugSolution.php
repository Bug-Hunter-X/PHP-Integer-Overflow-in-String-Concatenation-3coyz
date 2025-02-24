The solution involves explicitly casting the `$total` variable to a string before concatenation to prevent PHP's automatic type coercion from causing integer overflow.  This ensures a correct string representation even for extremely large numbers.

```php
<?php
$price = 2147483647; // Maximum 32-bit signed integer
$quantity = 2;
$total = $price * $quantity; // Potential integer overflow
echo "Total cost: " . (string)$total . "USD"; // Explicit type casting
?>
```

Alternatively, using a function like `number_format` would provide better formatting and prevent issues with very large numbers as it's designed to handle the formatting of numerical values:

```php
<?php
$price = 2147483647; 
$quantity = 2;
$total = $price * $quantity; 
echo "Total cost: " . number_format($total, 0, '.', ',') . " USD";
?>
```