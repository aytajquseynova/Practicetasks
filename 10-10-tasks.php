<?php
#9 








#10
// function factorial($number){
//     $total = 1;
//     for ($i = $number; $i > 0; $i--) {
//     $total = $total * $i;
//     }
//     var_dump($total);
// }

// factorial(4);


# 12 
// echo str_repeat("*", 5);
// echo "<br>";
// echo str_repeat("*", 1);
// echo "<br>";
// echo str_repeat("*", 1);
// echo "<br>";
// echo str_repeat("*", 4);
// echo "<br>";
// echo str_repeat("*", 1);
// echo "<br>";
// echo str_repeat("*", 1);
// echo "<br>";
// echo str_repeat("*", 5);

#  13: İstifadəçidən 1 ila 12 arasında bir ay nömrəsi qəbul edin və bu nömrəyə görə ayın adını tapan bir PHP switch-case funskiyası yazın.
// $month = 2;
// switch($month){
//     case 1:
//         echo "January";
//         break;
//     case 2:
//         echo "February";
//         break;
//     case 3:
//         echo "March";
//         break;
//     case 4:
//         echo "April";
//         break; 
//     case 5:
//         echo "May";
//         break;
//     case 6:
//         echo "June";
//         break;
//     case 7:
//         echo "July";
//         break;
//     case 8:
//         echo "August";
//         break; 
//     case 9:
//         echo "September";
//         break;
//     case 10:
//         echo "October";
//         break;
//     case 11:
//         echo "November";
//         break;
//     case 12:
//         echo "December";
//         break;                   
// }

#14 
// $DayOfWeekNumber = date("w");
// switch($DayOfWeekNumber){
//     case 1:
//         echo "Today is Monday. Clean your house";
//         break;
//     case 2:
//         echo "Today is Tuesday. Buy some food.";
//         break;
//     case 3:
//         echo "Today is Wednesday.Visit a doctor.";
//     case 4:
//         echo "Today is Thursday. Repair your car.";
//         break;
//     case 5:
//         echo "Today is Friday. Party tonight.";
//         break;
//     case 6:
//         echo "Today is Saturday. It's movie time.";
//         break;      
//     case 7:
//         echo "Today is Sunday. Do some rest";
//         break;
//     default:
//         echo "No information available for that day";
// }



#15 BMI
function bmi($weight, $height){

    if (!is_numeric($weight) || !is_numeric($height)) {
        echo "Zehmet olmasa eded daxil edin";
        return;
    $weight = (float)$weight; 
    $height = (float)$height;

    $calcHeight = ($height / 100);
    $index = $weight / ($calcHeight * $calcHeight);
    
    if ($index < 18.5 && $index >= 0) {
        echo "az ceki";
    }
    else if ($index >= 18.5 && $index < 25.0) {
        echo "normal";
    }
    else if ($index >= 25.0 && $index < 30.0) {
        echo "artiq ceki";
    }
    else if ($index >= 30) {
        echo "obez";
    }  
     
    }

}

bmi('ssss', "gj"); 







// for($i = 0; $i<21; $i++) {
//     if($i < 5) {
//         echo "*";
//     } else if($i<8) {
//         echo "*<br>";
//     } else if($i < 12) {
//         echo "*";
//     } else if($i< 15) {
//          echo "*<br>";
//     } else {
//         echo "*";
//     }
// }





?>