# PHP Array Key Handling Inconsistency

This repository demonstrates a subtle but important inconsistency in how PHP handles numeric and string keys when modifying array values within functions.

## Description
The `increment_array_value` function is designed to increment an array's value for a given key.  However, using a numeric key leads to unexpected behavior compared to using a string key.  This is because PHP's type handling differs between string and numeric indices. No warning or error is thrown, making it a silent bug.

## How to Reproduce
Run `bug.php` and observe the output. You'll see that incrementing with a string key works as expected, but incrementing with a numeric key behaves differently.

## Solution
The `bugSolution.php` file offers a modified function that addresses this issue by using a consistent approach (string keys). This ensures predictable and consistent behavior regardless of the key type.

## Conclusion
This demonstrates the potential pitfalls in relying on implicit type handling in PHP's array functions.  Explicit type handling or consistent key usage (e.g., always using string keys for array indices) is recommended for preventing such errors.