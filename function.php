<?php

//------function with no parameter------//
function hello($name){            //function declaration
    echo "  Hello $name, I am at SAE.<br>";
    echo "I am a web student.<br>";
}

//hello();                          //Calling the function

//--------passing the value----------//
           

$name = "Dear People";
hello($name);  //Calling the function and argument ()


// more than one parameter
function add($a=20,$b=30){
    $sum=$a+$b;
    echo '<br>';
    echo $a .'<br>';
    echo $b .'<br>';
    //echo '<br>' . $sum;    // or
    return $sum;
}
add();             //default parameter will be considered
add(10,15);       //Calling the function and argument (), It will consider the value in the braket
add(100);
 
$r = add(56,99);   // USing with return. When use return a variable must be declated
echo "Using return keyword = $r";           // and print

echo "<br><br>";

///////------------------------///////
function addd($c=3,$d=9){
    if ($c>$d){
        echo "c is greater than d. <br>";
    }
    else{
        echo "b is greater. <br>";
    }
}
addd();
echo "<br><br>";
echo "1.Check out the error and if there is error correct that one  <br>
";

function test()
{
$x=2;
$y=2;
// this will generate error global variable is not available to function
echo "$x to $y";
}
test();
echo "<br><br>";

echo "2. Write a PHP program to check if a person is eligible to vote or not.<br>";


/*function vote($age=35){
  
    if($age<18){
        echo "Minimum age 18 is required. <br>";
    }
    else if($age >= 18){
        echo "You are eligible to vote.<br>";
    }
    
 
}

vote(); */
$voting = [
    "Sofia"=>13,
    "Joseph"=>24,
    "Mia"=>17,
    "Peter"=>56
];

 function vote($age){
    
    if($age<18){
    
$message= "sorry minimum age 18 is required. <br>";
    }
    
    else if($age >= 18){
        $message=  "You are eligible to vote.<br>";
    }
    return $message;

}
foreach($voting as $name=>$age){
    echo "Dear $name ". vote($age);
}


echo "<br><br>";

//Global variable can be use anywhere after declaring it.

$z =200;
function adding($l =20,$n=30)
{ 

    static $i=1;  // it is always content the previous value and increment by 1
    global$z;   //to use the variable in this scope
    $sum =$l+$n+$z;
    $i++;        // $i =2
    echo "static variable $i <br> " ;
    return $sum;

}
adding();  // function called (1)
$s = adding(10,40);   //second time 
echo "<br>  the answer is $s<br> ";
adding(100,200);  // third time function called

echo "<br><br>";

//




 