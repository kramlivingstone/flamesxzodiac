<?php 

$input = "20/01/2016";

$months = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	];

$zodiac = [
		'Capricorn',
		'Aquarius',
		'Pisces',
		'Aries',
		'Taurus',
		'Gemini',
		'Cancer',
		'Leo',
		'Virgo',
		'Libra',
		'Scorpio',
		'Sagittarius'
		// 'Capricorn'    //version1
	];

$zodiac_borders = [
		'20', // January
		'19', //February
		'21', //March
		'20', //April
		'21', //May
		'21', //June
		'23', //July
		'23', //August
		'23', //September
		'23', //October
		'22', //November
		'22' //December
];


$month = substr($input,3,2);
$day = substr($input,0,2);
$year = substr($input,6,4);

$day_number = $day / 1;
$count = $month / 1;

$month_name = $months[$count - 1];
$index = $count - 1;

echo $month_name . " " . $day_number . ", " . $year . "<br>";

if($zodiac_borders[$index] <= $day_number)
	$index++;

if ($index > 11)
	$index = 0;

// if($zodiac_borders[$index] <= $day_number)
// 	echo $zodiac[$index + 1];
// else
// 	echo $zodiac[$index];

echo $zodiac[$index];

?>