<?php
// $arr = [1, [2, [3, [4]]]];
// function get_array_depth($arr, $n = 1) {
//   $max = $n;
//   foreach ($arr as $item) {
//     if (is_array($item)) {
//       $max = max($max, get_array_depth($item, $n + 1));
//     }
//   }
//   return $max;
// }
// $depth = get_array_depth($arr);
// echo $depth;




// 2.
function nearestVowel($letter) {
 $letter = 'b';
 $letasc = ord($letter);
 
}
// 3.

// function dateDiffInDays($date1, $date2) {
// 	$diff = strtotime($date2) - strtotime($date1);
//   return abs(round($diff / 86400));
// }
// $date1 = "14-06-2019";
// $date2 = "20-06-2019";
// $dateDiff = dateDiffInDays($date1, $date2);
// printf("Difference between two dates: " . $dateDiff . " Days ");