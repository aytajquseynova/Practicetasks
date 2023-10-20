<?php
include 'helper.php';
#1 
// $users = [
//    [
//       'name' => 'Murad',
//       'surname' => 'Agamedov',
//       'is_login' => false,
//    ],
//    [
//       'name' => 'Eduard',
//       'surname' => 'Renatov',
//       'is_login' => true,
//    ],
//    [
//       'name' => 'Elxan',
//       'surname' => 'Eliyev',
//       'is_login' => false,
//    ],
//    [
//       'name' => 'Tural',
//       'surname' => 'Arzuman',
//       'is_login' => true,
//    ],
//    [
//       'name' => 'Mehememd',
//       'surname' => 'Haciyev',
//       'is_login' => true,
//    ]
// ];

// function myFunc($user){
//     if($user['is_login'] === true){
//         return "Xos gelmisiniz".$user['name']. $user['surname'];
//     }else {
//         return "Xahis olunur daxil olun";
//     }
// }

// $newArr = array_map("myFunc", $users);
// print_r($newArr);
//  $students = [
//    [
//       'name' => "Murad Agamedov",
//       'evaluating' => 95
//    ],
//    [
//       'name' => "Eduard Renatov",
//       'evaluating' => 44
//    ],
//    [
//       'name' => "Elxan Eliyev",
//       'evaluating' => 14
//    ],
//    [
//       'name' => "Tural Arzuman",
//       'evaluating' => 66
//    ],
//    [
//       'name' => "Ulvi Alekberov",
//       'evaluating' => 80
//    ],
//    [
//       'name' => "Tamerlan Ferecullayev",
//       'evaluating' => 68
//    ],
//    [
//       'name' => "Eli Eliyev",
//       'evaluating' => 30
//    ],
//    [
//       'name' => "Musviq Musviqov",
//       'evaluating' => 25
//    ]
//    ];

//    function myFunction($student){
//     if($student['evaluating'] > 70){
//         return $student;
//     }
//    }

//    $telebe = array_filter($students,"myFunction");
//    print_r ($telebe);


#3
// $students = [
//    [
//       'id' => 1,
//       'name' => "Murad Agamedov",
//    ],
//    [
//       'id' => 2,
//       'name' => "Eduard Renatov",
//    ],
//    [
//       'id' => 3,
//       'name' => "Elxan Eliyev",
//    ],
//    [
//       'id' => 4,
//       'name' => "Tural Arzuman",
//    ],
//    [
//       'id' => 5,
//       'name' => "Ulvi Alekberov",
//    ],
//    [
//       'id' => 6,
//       'name' => "Tamerlan Ferecullayev",
//    ],
//    [
//       'id' => 3,
//       'name' => "Elxan Eliyev",
//    ],
//    [
//       'id' => 7,
//       'name' => "Eli Eliyev",
//    ],
//    [
//       'id' => 2,
//       'name' => "Eduard Renatov",
//    ],
//    [
//       'id' => 1,
//       'name' => "Murad Agamedov",
//    ],
//    [
//       'id' => 8,
//       'name' => "Musviq Musviqov",
//    ]
// ];

// $newArr = [];
// foreach ($students as $val){
//     $newArr[$val['id']] = $val;
// };
// $newArr = array_values ($newArr);
// echo "<pre>";
// print_r ($newArr);
// echo "</pre>";








// $array  = [
//     ['price' => 19.99, 'qty' => 3, 'name' => 'iphone1'],
//     ['price' => 2.99, 'qty' => 2, 'name' => 'iphone2'],
//     ['price' => 5.99, 'qty' => 4, 'name' => 'iphone3'],
//     ['price' => 6.99, 'qty' => 5, 'name' => 'iphone15']
// ];

// $total = array_reduce ($array, fn($sum, $item) => $sum + $item['price'] * $item['qty'], 0);

// echo $total;

// $product = [
//     ['price' => 109.99, 'name' => 'iphone1'],
//     ['price' => 209.99, 'name' => 'iphone2'],
//     ['price' => 1005.99, 'name' => 'iphone3'],
//     ['price' => 2000.99, 'name' => 'iphone15']
// ];

// $total = array_reduce ($product, fn($sum, $item) => $sum + $item['price'] , 0);

// echo $total;

$users = [
    ['name' => 'Rena',
    'surname' => 'Musayeva',
    'job'=> 'FrontEnd'],

    ['name' => 'Aytac',
    'surname' => 'Huseynova',
    'job' => 'Fullstack'],
    
    ['name' => 'Fidan',
    'surname' =>'Isayeva',
    'job' => 'BackEnddddddd'],

     ['name' => 'Ali',
    'surname' =>'Huseynli',
    'job' => 'BackEnd']
];
echo"<pre>";
// usort($users, function($item1, $item2) {
//     return ($item1['job'] <=> $item2['job']);
// });
usort ($users , fn($item1, $item2) =>$item1['job'] <=> $item2['job'] );
print_r($users);echo "</pre>";

?>