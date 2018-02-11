<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<br>';
#2;
$date = str_replace('-', '/', $date);
echo 'The new date with slashes is: '.$date."<br>";

#3;
if ($date-$tar>0) {
	echo "the future"."<br>";
} elseif ($date-$tar<0) {
	echo "the past"."<br>";
} else {
	echo "Oops."."<br>";
}
#4;
$i = strpos($date, '/');
$j = strrpos($date, '/');
echo 'The position values are:'.$i.' '.$j."<br>";

#5;
$i = str_word_count($date);
echo 'The word count in the date string is: '.$i."<br>";

#6;
$i = strlen($date);
echo 'The length of the date string is: '.$i."<br>";

#7;
$x = ord($date);
echo 'The ASCII value of the first character is: '.$x."<br>";

#8;
$lasttwo = substr($date, -2);
echo 'The last two characters are: '.$lasttwo."<br>";

#9;
$date = explode('/', $date);
$theYear = $date[0];
$month = $date[1];
$day = $date[2];
echo 'The array elements are:'.$theYear.' '.$month.' '.$day."<br>";

#10;
echo 'foreach loop'."<br>";
echo 'Are the years in the array above leap years?'.'<br>';
foreach($year as $x) {
	switch($x % 4){
		case 0:
			switch($x % 100){
				case 0:
					switch($x % 400){
						case 0:
							echo "True ";
						break;
						default:
							echo "False ";
						break;
						}
					break;

					default:
					echo "True ";
					break;
				}
			break;
			default:
			echo "False ";
			break;
		}
}
echo "<br>";

echo "for loop"."<br>";
echo 'Are the years in the array above leap years?'.'<br>';
$counter = 0;
for($x=0; $x <sizeof($year); $x += 1){
		$counter = $year[$x];
		switch($counter % 4){
			case 0:
				switch($counter % 100){
					case 0:
						switch($counter % 400){
							case 0:
							echo "True ";
							break;

							default:
							echo "False ";
							break;
						}
					break;

					default:
					echo "True ";
					break;
				}
			break;
			default:
			echo "False ";
			break;
		}
}

	