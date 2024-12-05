```php
$date = new DateTime('2024-03-31');
$interval = new DateInterval('P1M');
$date->add($interval);
echo $date->format('Y-m-d');
```
This code adds one month to March 31st, 2024.  The expected result might be April 30th, 2024. However, PHP's DateTime::add() function can produce unexpected results around month boundaries. Instead of adjusting to the last day of the next month, it may simply add 31 days, resulting in May 1st, 2024.