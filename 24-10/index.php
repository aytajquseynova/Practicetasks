<?php


// if (!isset($_COOKIE["user"])) {
//     echo "Evvelce daxil olmalisiz";
// } 


if(!isset($_COOKIE["login"])){
    echo "evvelce daxil olmalisiz";
}else{
    echo "ana sehife";
}

?>