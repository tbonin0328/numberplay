<?php 

function makeRowTable($rowtitle, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $rowtitle;

	echo '</td></tr></table></td></tr>';
}

function makeTitleTable($data, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $data;

	echo '</td></tr></table></td></tr>';
}

function makeDataTable($data, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $data;

	echo '</td></tr></table></td></tr>';
}

function makeNumTable($arr1, $arr2, $arr3) {
		
	echo '<table class="inside">';
	echo "<tr>";
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3)){
			
	    	$numIndex = array_search($letter, $arr3);
			$numArray[] = $arr2[$numIndex];
	    	echo '<td>' . $arr2[$numIndex] . '</td>';
		}     
		else {
			echo '<td>' . "" . '</td>'; 
		}	   
	}
	
	echo '</table></td>';
}

function makeLetterTable($arr1){
	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arr1 as $letter)
	{
	    echo '<td>' . $letter . '</td>';    
	}

   	echo '</table></td>';
}

function sumNumArray($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3))
		{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];
		}
		else {
		$numArray[] = 0;
		}     
	}
	
	return array_sum($numArray);
}

function countElements($arr1, $arr2){
	
	$count = 0;
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr2))
		{
			$count++;
		}
		else {
		
		}     
	}
	
	return $count;
}

function makeVowelTable($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];     
	}
	
	return array_sum($numArray);
}

function getRoot($num){

	if ($num < 10 || $num == 11)
	{
		return "";
	}
	else {
	while ($num >= 10 && $num != 11){
	$sum = array_sum(str_split($num));
	$num = $sum;
	}	
	return "/" . $sum;
	}
	return 11;
}

function getRootOnly($num){

 	$sum = array_sum(str_split($num));
	
	return $sum;
}

function makeOneToNine(){
	
	echo '<table class="insidenb">';
	echo "<tr>";	
	
	for ($i = 1; $i < 10; $i++) {
	echo '<td>' . $i . '</td>';
	}
	
	echo '</tr></table></td>';
}

function makeNumArray($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3))
		{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];
		}
		else {
		$numArray[] = 0;
		}     
	}
	
	return $numArray;
}

function countOneToNine($arr1, $arr2){
	
	echo '<table class="inside">';
	echo "<tr>";	
	$tmp = array_count_values($arr1);
	asort($tmp);
	
	foreach ($arr2 as $number)//for number in array of numbers 1 through 8
	{
		if(in_array($number, $arr1))//if the number is in the array of all numbers
		{
			echo '<td>' . $tmp[$number]. '</td>';//print number of times it shows
		}
		else 
		{
			echo '<td>' . 0 . '</td>';//else print zero
		}
	}
	echo '</tr></table></td>';
}
?>

