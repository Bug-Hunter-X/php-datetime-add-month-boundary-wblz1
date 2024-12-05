```php
function addMonth($date, $monthsToAdd) {
  $date = new DateTime($date);
  $year = $date->format('Y');
  $month = $date->format('m');
  $day = $date->format('d');

  $newMonth = $month + $monthsToAdd;
  $newYear = $year + floor(($newMonth - 1) / 12);
  $newMonth = ($newMonth - 1) % 12 + 1;

  $newDay = min($day, (int) date('t', strtotime("$newYear-$newMonth-01"))); //days in target month
  
  return new DateTime("$newYear-$newMonth-$newDay");
}

$date = new DateTime('2024-03-31');
$newDate = addMonth($date->format('Y-m-d'), 1);
echo $newDate->format('Y-m-d'); // Output: 2024-04-30
```
This improved `addMonth` function explicitly handles month-end issues by determining the last day of the new month and ensuring the resulting day does not exceed that value.