# PHP strtotime() Unexpected Date Handling

This repository demonstrates an uncommon behavior in PHP's `strtotime()` function.  When provided with an invalid date (e.g., February 29th in a non-leap year), it silently adjusts the date to the next valid date instead of raising an error.  This can lead to subtle bugs in applications handling dates.

## Bug Description

The `strtotime()` function does not throw an error or warning when given an invalid date. Instead, it returns a timestamp for a valid date, creating the possibility of unexpected results without appropriate error handling.

## Solution

The solution involves stricter date validation before passing dates to `strtotime()`. Using the `DateTime` class provides better handling of potential errors.

## How to reproduce

1. Clone this repository.
2. Run `bug.php`
3. Notice the output of the date, showing that the date was moved to March 1st rather than displaying an error.
4. Run `bugSolution.php` to see how to implement proper date validation and error handling.