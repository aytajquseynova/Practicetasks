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

?>