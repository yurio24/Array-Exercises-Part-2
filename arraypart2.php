<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<br><h1>Duplicate elements</h1>
	<?php 
	$input = file('arraypart2.txt');
	$array_count = array();
    foreach ($input as $a) {

     @$array_count[$a]++;

    }

	echo 'Total number of duplicate elements found in the array is : '.count($array_count). '<br>'; 
	?>
<br><h1>Even and Odds</h1>
	<?php

	$input = file('arraypart2.txt');

	$oddarray = array();
	$evenarray = array();
	echo "Original array: \n";
	$size = count($input);
	for($i = 0; $i < $size; $i++){
		echo "$input[$i]";
	}
	$j = 0;
	$k = 0;

	for($i = 0; $i < $size; $i++){
		if($input[$i] % 2 == 0){
			$evenarray[$j] = $input[$i];
			$j++;
		} else {
			$oddarray[$k] = $input[$i];
			$k++;
		}
	}

	echo "The odd element are: <br>";
	for($i = 0; $i <count($input); $i++){
		if($input [$i] %2!=0){
			echo "$input[$i]";
		}
	}

	echo "The even elements: ";
	for($i = 0; $i <count($input); $i++){
		if($input [$i] %2==0){
			echo "$input[$i]";
		}
	}
	?>


<br><h1>Frequency</h1>
	<?php 
	
	$a = file('arraypart2.txt');

	$fr = array_fill(0, count($a), 0);
	$check = -1;
	for($i = 0; $i < count($a); $i++)
	{
	$count = 1;
	for($j = $i+1; $j < count($a); $j++)
	{
	if($a[$i] == $a[$j])
	{
	$count++;
	
	$fr[$j] = $check;
	}
	}
	if($fr[$i] != $check) 
	$fr[$i] =$count;
	}
	echo("The Array Elements are: <br>");
	foreach( $a as $b )
	{
	echo $b."  ";
	}
	
	echo (" <br> frequency of given array elements: <br>" );
	for( $i = 0; $i < count($fr); $i++)
	{
	if($fr[$i] != $check)
	{
	echo( $a[$i] ." occurs " );
	echo( $fr[$i]." times.");
	echo(" ");
	}
	}
	return 0;
	?>

	


	

</body>
</html>