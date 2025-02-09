```php
<?php
function increment_array_value(array &$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0;
  }
  $arr[$key]++;
}

$my_array = [];
increment_array_value($my_array, 'a');
echo $my_array['a']; // Output: 1
increment_array_value($my_array, 'a');
echo $my_array['a']; // Output: 2

// Unexpected behavior
increment_array_value($my_array, 1);
echo $my_array[1]; // Output: 1
increment_array_value($my_array, 1);
echo $my_array[1]; // Output: 2

// The issue is that when we pass a numeric key, it gets treated differently.
// PHP doesn't throw any explicit errors, yet the unexpected behavior occurs.
// For consistent behavior, always use string keys when using array functions.
?>
```