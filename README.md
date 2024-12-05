# PHP DateTime::add() Unexpected Month Boundary Behavior

This repository demonstrates an uncommon bug in PHP's DateTime class related to the `add()` method. When adding a month to a date near the end of the month (e.g., March 31st), the result is not always intuitive. Instead of resulting in the last day of the next month, it can result in a date that is 31 days ahead, potentially exceeding the last day of the following month.  This can lead to incorrect date calculations in applications.

The `bug.php` file contains code that reproduces the issue, and `bugSolution.php` provides a possible solution.

## Reproducing the Bug

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.