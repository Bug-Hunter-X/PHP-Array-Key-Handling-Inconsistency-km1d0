```php
<?php
function increment_array_value(array &$arr, string $key) {
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

// Consistent behavior
increment_array_value($my_array, '1');
echo $my_array['1']; // Output: 1
increment_array_value($my_array, '1');
echo $my_array['1']; // Output: 2

//Using string key ensures consistent behavior.
?>
```