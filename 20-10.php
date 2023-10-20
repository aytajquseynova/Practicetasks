<?php
// person class yarat
// age, name, email


// class Person{



//     public function __construct( private $name, private $age, private $email )
//     {
        
//     }

//     public function getName (){
//         return $this -> name ;
//     }

//     public function getAge(){
//         return $this -> age ;
//     }

//     public function getEmail()
//     {
//         return $this-> email ;
//     }

// }

// $Person = new Person("Aytaj", 22, "aytajguseyn@gmail.com" );

// echo $Person -> getName();
// echo "<br>";
// echo $Person-> getAge();
// echo "<br>";
// echo $Person->getEmail();
// echo "<br>";

#task 2

// class Car{
    
//     public function __construct(private string $make, private  string $model,private int $year)
//     {

//     }

//     public function getMake(){
//         return $this -> make;
//     }


//     public function getModel()
//     {
//         return $this-> model;
//     }


//     public function getYear()
//     {
//         return $this-> year;
//     }

//     public function calculateAge($currenYear){
      
//         return $currenYear - $this -> year;
//     }


// }

// $Car = new Car('BMW', 'M3', 2012);

// echo $Car -> getMake(). "<br>";
// echo $Car-> getModel() . "<br>";
// echo $Car-> getYear() . "<br>";

// echo $Car -> calculateAge(date("Y"));

# task 3

// class BankAccount{
   
//     public function __construct(public $balance , private $person)
//     {
        
//     }

//     public function getPerson(){
//         return $this -> person;
//     }
//     public function addDeposit($price){
//         return $this -> balance + $price;
//     }

//     public function getfromDeposit($price){
//         if($price > $this -> balance ){
//             return $price ;
//         }  
//         else{
//             return $this-> balance - $price;
//         }     
//     }

//     public function checkBalance(){
//         return $this -> balance;
//     }

// }

// $bankAccount = new BankAccount(220, "Aytaj Huseynova");
// echo $bankAccount -> getPerson();
// echo "<br>";
// echo $bankAccount -> addDeposit(200);
// echo "<br>";
// echo $bankAccount -> getfromDeposit(20);
// echo "<br>";
// echo "Salam, balansinizda ".$bankAccount -> checkBalance()." azn  var";

# task 4

class studentRooster{
    public $students = [];

    public function addStudent($name, $score){
     return $this -> students [$name] = $score;
     return $this -> students;
    }

    public function removeStudent($name){
        unset($this -> students[$name]);
    }

    public function calcAverage(){
        return (array_sum($this -> students))/ count ($this ->students);
    }

}

$studentRooster = new studentRooster();

$studentRooster -> addStudent("aytaj", 92);
$studentRooster-> addStudent("sabina", 86);
$studentRooster->addStudent("aygun", 76);
var_dump($studentRooster -> students);
echo "<br><br>";
$studentRooster -> removeStudent("aytaj");
var_dump($studentRooster -> students);
echo "<br><br>";

var_dump($studentRooster -> calcAverage());
 ?>


