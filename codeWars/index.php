<?php

// $array = [34, 15, 88, 2];
// echo min($array);

#find the smallest integer in array 

// function smallestInteger($arr){
//     echo min($arr);
// }
// smallestInteger([34, 15, 88, 2]);

# you are square 

// function isSquare($n) {
//     $sq = sqrt($n);
//     if ($n < 0) {
//         echo "This is negative.";
//     } elseif ($n >= 0 && $sq == (int)$sq) {
//         echo "true";
//     } else {
//         echo "false";
//     }
// }

// isSquare(16);


// function makeNegative($num) {
//     if($num > 0){
//         echo $num * (-1);
//     }
//     else{
//         echo $num;
//     }
    
// }
// makeNegative(0);

#bax
// function find(array $integers) {
//     if(count($integers) >= 3){
//         for($i = 0; $i < count($integers); $i++){         
//             if($integers[$i] % 2 == 0 ){
//                 var_dump ($integers[$i]);
//             }
//             elseif($integers[$i] % 2 != 0){
//                 var_dump ($integers[$i]);
//             }
            
//         }
        
//     }
    
// };
// find([2,3,4]);


    
// };
// countPositivesSumNegatives([6, 7, 8, 9, -5]);

#positive_sum
// function positive_sum(array $arr) {
//     $positive = 0; 
//     for($i = 0; $i < count($arr); $i++){ 
//     if($arr[$i] > 0){
//         $positive += $arr[$i];
//     } 
//   }
//   var_dump ($positive);
// };
// positive_sum([1,-4,7,12]);


#square sum
// function square_sum(array $numbers){
//   $sum = 0;
//   for($i =0; $i < count($numbers); $i++){
//     $sum += ($numbers[$i]) * ($numbers[$i]);
//   }
//   var_dump ($sum);
// };
// square_sum([1, 2]);

#2 function square_sum(array $numbers) : int {
  // Write your code here...
//   $sum = 0;
//   foreach($numbers as $number) {
//     $sum += $number * $number;
//   }
  
//   return $sum;
// }

#Consider an array/list of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in the array (true means present).
// function countSheep($arr) {
//     $count = 0;
//     foreach ($arr as $sheep) {
//         if ($sheep == true) {
//             $count++;
//         }
//     }
//     var_dump($count);
// }

// countSheep([true, false, true]);

# task
// function removeEveryOther($array) {
//     $arr = array();
//     for($i = 0; $i < count($array); $i++){
//         if($i % 2 != 0){
//             $arr[] = $array[$i];
//         }
//     }
//     print_r ($arr);
// };
// removeEveryOther(['hello', 'world', 'buy', "hi"]);

# Write a function which calculates the average of the numbers in a given list.
// function find_average ($array){
//     $sum = 0;
//     $average = 0;
//     foreach($array as $value){
//         $sum += $value;
//         $average = $sum / (count($array));
//     }
//     var_dump ($average);
// };
// find_average([1, 2, 3, 4]);


#findNeedle
// function findNeedle($haystack) {
//     $value = array_search("needle", $haystack);
//     echo "found the needle at position $value";
// };
// findNeedle(["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"]);

#array to string
// function smash(array $words) {
//   $sum = "";
//   foreach($words as $word){
//     $sum = $sum." ". $word;
//   }
//   var_dump (trim($sum));
// };
// smash(['salam', 'necesiz', 'ne']);

#average baxx
// function get_average($a) {
//   $sum = 0;
//   $average = 0;
//   foreach($a as $numbers){
//     $sum += $numbers;
//     $average = $sum / (count($a));
//   }
//   var_dump  (floor($average));
// };
// get_average( [1, 1, 1, 1, 1, 1, 1, 2]);

#factorial
// function grow($a) {
//   $factorial = 1;
//   foreach($a as $val){
//     $factorial *= $val;
//   };
//   var_dump ($factorial);
// };
// grow([4, 1, 1, 1, 4]);



// function fixTheMeerkat($arr) {
//   print_r (array_reverse($arr));
// };
// fixTheMeerkat(["head", "body", "tail"]);

# monkeycount

// function monkeyCount($n) {
//   $count = 0;
//   for($i = 0; $i< count($n); $i++){
//     if($n[$i] > 0){
//      $count++;
//      break;
//     }
//     else {
//       echo "1-den boyuk eded daxil edin";
//     }
//   }
//   var_dump ($count);
// }
// monkeyCount([0, 2, 3]);

#10.10 

#1
#countPositivesSumNegatives
// function countPositivesSumNegatives(array $input) {
//     $negativSum = 0;
//     $positiveCount = 0;
//     for($i = 0 ; $i < count($input); $i++){
//         if($input[$i] > 0){
//             $positiveCount++;
//         }
//         elseif($input[$i] < 0){
//            $negativSum += $input[$i];
//         }
//     }
//     var_dump ([$positiveCount, $negativSum]);

#2 
// function even_or_odd(int $n){
//   if($n % 2 == 0){
//     echo "Even";
//   }
//   elseif($n % 2 != 0){
//     echo "Odd";
//   }
// };
// even_or_odd(0);

#3 return negative

// function invert($a){
//   {
//     return ($a * (-1));
//   }
// }
// $a = [1, 2, 3, -4, -5];
// $b = array_map ('invert', $a);
// print_r($b);

// ya da
// function invert($a){
//   $arr = array();
//   for($i = 0 ; $i< count($a); $i++){
//     $arr[] = ($a[$i]) * (-1);
//   }
//   print_r($arr);
// };
// invert([1,2,3])


#5 array sum
// function sum(array $a){
//   print_r (array_sum($a));
// };
// sum([]);

#6 is the string uppercase

// function is_uppercase($str){
//   $upper = strtoupper($str);

//   if($str === $upper){
//     var_dump (true);
//   }
//   else{
//     var_dump (false);
//   }
// };
// is_uppercase('AYTAc');

#7 string to array 
// function string_to_array($s){
//     print_r (explode (" ", $s));
// };
// string_to_array ("salam necesiz");

#8 
// function repeatStr($n,  $str)
// {
//   $retstr = "";
//   for($i = 0; $i < $n; $i++){
//     $retstr  .=$str;
//   }

//   return $retstr;
  
// };
// echo repeatStr(3,'@');



# Beginner - Lost Without a Map
// $arr = [1, 2, 3];
// $newArr = array_map(fn($item) => $item * 2, $arr);

// print_r($newArr);

// function maps ($x){
//   print_r(array_map(fn ($item) => $item * 2, $x)) ;
// };
// maps([1, 2, 3]);


?>