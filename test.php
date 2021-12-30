<?php
// $a=10;
// $b=10;
// if($a==$b)
// {
// 	echo"successful";
// }

// $a=5;
// $b=10;
// if($a==$b)
// {
// 	echo"successful";
// }
// else
// {
// 	echo"failure";
// }

// $a=10;
// $b=20;
// $c=30;
// if($a > $b && $a > $c)
// {
// 	echo"a is large";
// }
// elseif($b > $a && $b > $c)
// {
// 	echo"b is large";
// }
// elseif($c > $a && $c > $b)
// {
// 	echo" c is large";
// }
// else
// {
// 	echo"a=b=c";
// }

// $fav = 'kannada';
// switch ($fav) {
// 	case 'malayalam':
// 		echo "your fav is malayalam";
// 		break;
// 	case 'tamil':
// 		echo "your fav is tamil";
// 		break;
// 	case 'kannada':
// 		echo "your fav is kannada";
// 		break;
// 	default:
// 		echo "none of them are your fav";
// 		break;
// }

// $a=1;
// while ($a<=10)
// {
// 	echo $a;
// 	$a++;
// }

// $a=0;
// do
// {
// 	echo $a;
// 	$a++;
// }
// while($a <= 10)

// for($a=1;$a<=10;$a++)
// echo "$a ";

//ARRAY

// $data=array(1,2,3,4,5);
// foreach($data as $value)
// {
// 	echo "$value";
// }

// $data = array("abc" => 1,"def" => 2,"ghi" => 3);
// foreach($data as $key => $value)
// {
// 	echo " $key == $value";
// }

// $data=array("30","50","55");
// echo $data[0]."<br>";
// echo $data[1]."<br>";
// echo $data[2];

// $data=array("30","50","55");
// echo count($data);

// $colors = array("Red", "Green", "Blue");
// echo "i like " . $colors[0];

// $color = array("red"=>"35", "black"=>"40", "blue"=>"45");
// echo "red is " . $color['red'] ;

// $color = array("red"=>"35", "black"=>"40", "blue"=>"45");

// foreach($color as $key => $value) {
//   echo "Key=" . $key . ", Value=" . $value;
// }

// $color = array (
//   array("red",22,18),
//   array("black",15,13)  
// );  
// echo $color[0][0].": color is: " . $color[0][1] . " ". $color[0][2] . ". <br>";
// echo $color[1][0].": color is: " . $color[1][1] . " ". $color[1][2] . ". <br>";

// $color = array (
//   array("red",22,18),
//   array("black",15,13) 
// );    
// for ($row = 0; $row < 2; $row++) {
//   for ($col = 0; $col < 3; $col++) {
//     echo " ".$color[$row][$col]." ";
//   }
// }

// $color = array("red", "blue", "white");
// sort($color);

// $count = count($color);
// for($x = 0; $x < $count; $x++) {
//   echo $color[$x]. "<br>";
// }

// $color = array("red", "blue", "white");;
// rsort($color);

// $count = count($color);
// for($x = 0; $x < $count; $x++) {
//    echo $color[$x]. "<br>";
// }

// $age = array("abc"=>"35", "def"=>"37", "ghi"=>"43");
// asort($age);

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
// }

// $age = array("def"=>"35", "abc"=>"37", "ghi"=>"43");
// ksort($age);

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
// }

//string
// echo strlen("Hello ");

// echo str_word_count("Hello hi happy");

// echo strrev("Hello world!");

// echo strpos("Hello world!", "world");

// echo str_replace("world", "Dolly", "Hello world!");

// define("HELO", "Welcome ");
// echo HELO;
//case sensitive

// define("HELO", "Welcome ", true);
// echo helo;
//in case sensitive

// define("color", [
//   "red ",
//   "blue",
//   "white"
// ]);
// echo color[0];

// $x = 10;  
// $y = 6;

// echo $x + $y;

// $x = 10;  
// $y = 6;

// echo $x - $y;

// $x = 10;  
// $y = 6;
// echo $x * $y;

// $x = 10;  
// echo $x;

// $x = 10;  
// echo $x++;

// $x = 50;  
// $y = 25;
// if ($x == 50 && $y == 25) {
//     echo "good";
// }

// $x = 10;  
// if ($x !== 5) {
//     echo "hi!";
// }

// $x = array("a" => "hi", "b" => "helo");  
// $y = array("c" => "happy", "d" => "mrng");  
// print_r($x + $y);

//functions
function color($cname) {
  echo "$cname color.<br>";
}
color("red");
color("blue");

?>