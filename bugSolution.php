```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately.  Throwing an exception is one option.
      throw new InvalidArgumentException('Non-numeric value encountered in array.');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];

try {
  $sum = calculateSum($numbers);
  echo "Sum: " . $sum;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
```