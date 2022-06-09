<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Login</title>
</head>
<body>
 <form action= "testdata.php" method ='get'>
        First Name:<input type="text" name="name" id="name">
        <br><br>
        Last Name:<input type="text" name="lastname" id="lastname">
        <br><br>
        <button>Submit</button>
</form>

<p>Write a program to create an app to add two different numbers every time like a calculator based on the input output will be calculated.      </p>
<form action= "" method ='get'>
        First Number:<input name="num1">
        <br><br>
        Second Number:<input name="num2">
        <br><br>
        <button type="submit">Calculate</button>
        <br><br>
        
        
<?php

// function add($a,$b){
//     $sum = $a+$b;
//     return $sum;
// }
// $number1 = $_GET['num1'];
// $number2 = $_GET['num2'];
// $r = add($number1,$number2);
// echo "Sum: $r";
// echo "<br><br>";

function add($a, $b)
{
 
     return $a + $b;
}
if (isset($_GET['num1']) && isset($_GET['num2']))
{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo add ($num1,$num2);
}
?>

    <h2>Student Grading</h2>
    <form action="get_post_login.php" method = 'get'>
        <label for="  Enter your score">  Enter your score:</label>
       <input type="number" name ="score" id="score">
        <button type="submit">Submit</button>
    </form>
    

    

  <?php  
function grade($yourScore){
    if($yourScore >= 60 ){
$message = "Congratulation! You have passed the exam , First Division! ";
    }
    else if ($yourScore >45 && $yourScore<59){
$message = "You have passed the exam with Second Division!";
}
    else if ($yourScore >33 && $yourScore<44){
$message = "You have passed the exam with Third Division!";
    }
    else{
$message = "Sorry, You have failed the exam.";
    }
 return $message;
}
if (isset($_GET['score'])){
$score =$_GET['score'];
echo grade($score);
}

    ?>  

  

</body>
</html>
   