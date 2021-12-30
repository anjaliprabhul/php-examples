<?php

//21/12
// 1.
// function special($ar){
// 	$a = 1;
// 	foreach ($ar as $key => $val) {
// 		$v = $val % 2;
// 		$type = $key % 2;
// 		if ($v !== $type) {
// 			$a = 0;
// 		}
// 	}
// 	return $a;
// }
// $f = special(array(2, 7, 9, 1, 6, 1, 6, 3));
// if($f == 1){
// 	echo"special";
// }
// else{
// 	echo"not spl";
// }

// false
// function special($ar){
// 	$a = 1;
// 	foreach ($ar as $jey => $val) {
// 		$v = $val % 2;
// 		$type = $jey % 2;
// 		if ($v !== $type) {
// 			$a = 0;
// 			break;
// 		}
// 	}
// 	return $a;
// }
// $f = special(array(2, 7, 9, 1, 6, 1, 6, 3));
// if($f == 1){
// 	echo"special";
// }
// else{
// 	echo"not spl";
// }




// 2.
$m = 0;
$n = 5; 
$large = 0;
for($j = $m;$j <= $n;$j++){
  $a = 0;
  for($i = 2;$i < ($n / 2);$i++){
    if($j % $i == 0){
      $a = 1;
      continue;
    }
  }
  if($a == 0){
    if($large < $j){
      $large = $j;
    }
  }
}
echo $large;



// 3.
// function reverseStr(&$str){
//   $str = "anjali";
//   $n = strlen($str);
//   for ($i = 0; $i < $n / 2; $i++){
//   	$key = array($str[$n - $i - 1],$str[$i]);
//   	print_r($key);
//   	echo "<br>";
// 	  list($str[$i],$str[$n - $i - 1]) = array($str[$n - $i - 1],$str[$i]);
	  
// 	}
// }
// reverseStr($str);
// echo "the reversed string is: " . $str  . "<br>";
// $upp = strtoupper($str);
// $len = strlen($upp);
// echo "the upper case string is :" . $upp . "<br>";
// echo "the incremented string is :";
// for ($i=0; $i < $len; $i++) {
//   $res = (chr(ord($upp[$i]) + 1));
// 	echo  $res;
// }


// 4.

// class Circle 
// {
//   const PI = 3.14;
//   public $radius;
 
//   function __construct($r) 
//   {
//     $this->radius = $r;
//   }  
//   function getArea() 
//   {
//     return self::PI * ($this->radius * $this->radius);
//   } 
//   function getPerimeter() 
//   {
//     return (2 * self::PI) * $this->radius;
//   } 
// }
// $c = new Circle(2);
// echo "Area of Circle is:".$c->getArea();
// echo "<br/>Perimeter of Circle is:".$c->getPerimeter();





