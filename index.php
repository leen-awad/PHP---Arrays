
<?php
// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script that display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that
// moment: the red carpet, the green lawn, the white house, the leaden sky. The
// new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $color variables .
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that
 moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The
 new president and his first lady. - Richard M. Nixon";
 echo "<br>";
 echo ('----------------------------------------------------------------------------------');
 echo "<br>";

//  2. $color = array('white', 'green', 'red'')
// Write a PHP script that will display the colors in the following order :
// Output :
// white, green, red,
// ● green
// ● red
// ● white
$color1 = array('white','green','red');
$reverse = array_reverse($color1);
for($i=0;$i<count($color1);$i++){
    echo $color1[$i];
    echo "<ul>";
    echo "<li> $reverse[$i] </li>";
    echo "</ul>";
}

echo ('----------------------------------------------------------------------------------');
echo "<br>";

// 3. $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
// "Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
// "Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
// Create a PHP script which displays the capital and country name from the above
// array $cities. Sort the list by the capital of the country.
// Sample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
// The capital of Germany is Berlin
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
 "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
 "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
 "Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
 "Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
asort($cities);
foreach($cities as $x => $x_value) {
    echo "he capital of " . $x . ", is " . $x_value;
    echo "<br>";
  }



echo ('----------------------------------------------------------------------------------');
echo "<br>";
//   4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer
// keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

$int = array(1, 2, 3, 4, 5);
 var_dump($int);
 echo "<br>";
 unset($int[3]);
 $int = array_values($int);
 echo '
';
var_dump($int);




echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";

// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white
$color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color2[4];





echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5
$original_array = array( '1','2','3','4','5' );
foreach ($original_array as $x) 
{echo "$x ";}
$add_value = '$';
array_splice( $original_array, 3, 0, $add_value ); 
echo "<br>";
foreach ($original_array as $x) 
{echo "$x ";};





echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
$frinds=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($frinds);
var_dump($frinds);
echo "<br>";

// b) ascending order sort by Key
$frinds=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($frinds);
var_dump($frinds);
echo "<br>";
// c) descending order sorting by Value
$frinds=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($frinds);
var_dump($frinds);
echo "<br>";
// d) descending order sorting by Key
$frinds=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($frinds);
var_dump($frinds);
echo "<br>";




echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 9. Write a PHP script to calculate and display average temperature, five lowest
// and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
// 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,
$temperatures=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures)/count($temperatures);
echo $average;
echo "<br>";
sort($temperatures);
for($i=0;$i<5;$i++){
    echo $temperatures[$i].", ";
}

echo "<br>";
for ($i=(count($temperatures)-5); $i< (count($temperatures)); $i++)
{
echo $temperatures[$i].", ";
}






echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 11. Write a PHP program to merge the following two arrays.
// Sample arrays :
// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");
// Expected Output :
// Array
// (
// [0] => Array
// (
// [0] => example
// [1] => 70
// [2] => 40
// )
// [1] => Array
// (
// [0] => com
// [1] => 25
// [2] => 45
// )
// )
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");
$result = array_merge((array)$array1, (array)$array2);
print_r($result);




echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 12. Write a PHP function to change the following array's all values to upper or
// lower case.
// Sample arrays :
// $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red )
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )
$my_color=array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower_color=array_map('strtolower', $my_color);
print_r ($lower_color);
echo "<br>";
$upper_color=array_map('strtoupper', $my_color);
print_r ($upper_color);




echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 13. Write a PHP script which displays all the numbers between 200 and 250 that
// are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248
echo implode(",",range(200,250,4));






echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.
$array5=array("a","b","c","d");
$array5_length=count($array5);
$array6=array("a","b","c");
$array6_length=count($array6);
$array7=array("h","j","j","j","k");
$array7_length=count($array7);
if ($array5_length > $array6_length && $array5_length > $array7_length){
    $lrgest_length=$array5_length;
    echo "The longest array length is".$lrgest_length;
}
elseif ($array6_length > $array5_length && $array6_length > $array7_length){
    $lrgest_length=$array6_length;
    echo "The longest array length is".$lrgest_length;
}
else{
    $lrgest_length=$array7_length;
    echo "The longest array length is".$lrgest_length; 
}





echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 15. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12
$random = mt_rand(10, 20);
echo $random;
echo mt_rand(10, 20)." ";
echo mt_rand(10, 20)." ";
echo mt_rand(10, 20)." ";
echo mt_rand(10, 20)." ";




echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 16. Write a PHP script to get the largest key in the array.
$my_color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
ksort($my_color2);
$max_key = max( array_keys( $my_color2) ); 
echo $max_key;


echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 17. Write a PHP function that returns the lowest integer in the array that is not 0.
$numbers=array(1,2,3,4,5,6,78,9,8,0.5);
$lowest_inmteger=   min($numbers);
echo $lowest_inmteger;





echo "<br>";
echo ('----------------------------------------------------------------------------------');
echo "<br>";
// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
// Sample Data :
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
// Expected Output :
// 1.15
// 100.2578
// -2.964
function floor_number($number, $precision, $separator)
{
$numberSection=explode($separator, $number);
$numberSection[1]=substr_replace($numberSection[1],$separator,$precision,0);
if($numberSection[0]>=0)
{$numberSectiont[1]=floor($numberSection[1]);}
else
{$numberSection[1]=ceil($numberSection[1]);}

$ceil_number= array($numberSection[0],$numberSection[1]);
return implode($separator,$ceil_number);
}
print_r(floor_number(1.155, 2, "."));
echo "<br>";
print_r(floor_number(100.25781, 4, "."));
echo "<br>";
print_r(floor_number(-2.9636, 3, "."));

?>

