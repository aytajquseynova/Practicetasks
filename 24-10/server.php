<?php
$email = $_POST["email"];
$psw = $_POST["pwd"];

$arrays = [
    [
        "name" => "Aytaj",
        "surname" => "Huseynova",
        "password" => "123",
        "email" => "aytajquseynova01@gmail.com"
    ],

    [
        "name" => "Rena",
        "surname" => "Verdiyeva",
        "password" => "456",
        "email" => "renaverdiyeva@gmail.com"
    ]
];

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST["email"];
//     $psw = $_POST["pwd"];

//     $loggedIn = false;

//     for ($i = 0; $i < count($arrays); $i++) {
//         $arrName = $arrays[$i]['name'];
//         $arrSurname = $arrays[$i]['surname'];
//         $arrMail = $arrays[$i]['email'];
//         $arrPsw = $arrays[$i]['password'];
//         if ($email == $arrMail && $psw == $arrPsw) {
//             setcookie("user", $arrName, time() + (86400 * 30), "/");
//             echo "Salam, $arrName $arrSurname" . "<br>";
//             $loggedIn = true;
//             break;
//         }
//     }

//     if (!$loggedIn) {
//         echo "Salam melumatlari duzgun daxil edin";
//     }
// }

foreach($arrays as $arr){
    if($email == $arr['email'] and $psw == $arr['password']){
        echo "Salam"." ". $arr['name'];
        setcookie("login", true);
        exit;
    }
}

echo "Bele bir istifadeci movcud deyil";
exit;
?>



