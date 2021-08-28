@php
use Carbon\Carbon;
$start = Carbon::now()->setDate(2021, 9, 1);
$end = Carbon::now()->setDate(2021, 9, 30);
$workingDays = [1, 2, 3, 4, 5];

$holidayDays = ['*-12-25', '*-01-01'];
//   $array = array();
//     $query = $holidays;// pass array of holidays.
//     foreach($query as $row)
//     {
//         $array[] = $row['h_date'];
//     }
//     $holidayDays=$array;
// $holidays = [
//     Carbon::create(2014, 2, 2),
//     Carbon::create(2014, 4, 17),
//     Carbon::create(2014, 5, 19),
//     Carbon::create(2014, 7, 3),
// ];

$days = $start->diffInDaysFiltered(function (Carbon $date) use ($holidayDays, $workingDays) {
    return !in_array($date->format('N'), $workingDays) && !in_array($date->format('*-m-d'), $holidayDays);
}, $end);
echo $days;

@endphp
