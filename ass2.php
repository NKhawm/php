<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ass2.css">
    <title>Lap 1 - PHP</title>
</head>
<body>
    <h1>Database & Back-end Development<br>
Lab 1: Embedding PHP Variables & Operators in HTML</h1>
<div class="main-div">
    <div class="sub-div">
    <h3>Display string to screen using <b>echo</b></h3>
<?php
echo "Hello! <br><br>";
echo "I am a string. <br><br> ";
echo "<p> I am a <b>paragraph</b> inside PHP!<br><br>";
echo "I am another echo with single quotes.<br><br>";
echo "***********************************************************************";
?>
</div>

<hr>

<div class="sub-div">
    <h3>Get the PHP version and configuration information.</h3>

    <?php
    echo phpinfo();
    echo "*********************************************************************** <br>";
    ?>
</div>
<hr>
<div class="sub-div">
    <?php 
   echo "<h3>Using comments</h3>";
   echo 'Use // for one line comment <br><br>';
   echo 'Use /* */ for multi lines comments <br><br>';
   echo 'Use # for one line shell-style comment<br><br>';
   echo "***********************************************************************<br><br>";
   ?>

</div>
<hr>
<div class="sub-div">
    <?php
    echo "<h3>Dollar sign ($), Semi Colon </h3> <br><br>";
    echo "PHP variable always start with dollar sign<br><br>";
    echo " Always add a semi colon to the end of each line<br><br>";
    echo "**********************************************************<br><br>";
    ?>
</div>
<hr>

<div class="sub-div">
    <?php
    echo "<h3>Variables</h3><br><br>";
    echo "The type of a variable is not set by the programer, it is set by PHP depending on
    the context in which that variable is used.<br><br>";
    echo "Variable is declared and assigned to values at the start ";
    $bool = TRUE;
    $str = "foo";
    $num = 12;
    $fruits;
    $sweets;
    echo "Use (.) for concatenation in PHP <br><br>";
    echo "I am a boolean variable (TRUE/FALSE). $bool <br><br>";
    echo "I am a string variable with double quotation $str <br><br>";
    echo 'I am a string variable with single quotation'.$str."<br><br>";
    echo "I am an integer variable (number) $num <br><br>";
    echo " Variables can be declared at the start and then assign the value later<br> <br>";
    $fruits = "orange";
    $sweets = "chocolate";
    echo " I am a string variable $fruits <br><br>";
    echo "I am a string variable ".$sweets. "<br><br>";
    echo "**************************************************************<br><br>";
    ?>
</div>
<hr>

<div class="sub-div">
    <?php
    echo "<h3>Booleans</h3><br><br>";
    echo "The simplest type. Boolean can be either TRUE or FALSE.<br><br>";
    $new =TRUE;
    $old = FALSE;
    echo "The product is new $new <br><br>";
    echo " The product is old $old <br><br>";
    echo "************************************************************<br><br>";
    ?>
</div>
<hr>

<div class="sub-div">
    <?php
    echo "<h3>String</h3>";
    echo "String is a squence of characters.";
    $name = "Peter";
    $city = "Liverpool";
    echo "My name is $name and I am from $city. <br><br>";
    echo "Concatenation is used in the above example.<br><br>";
    echo "Find the string lenght of my city: ".strlen($city)."<br><br>";
    echo "Find the string lenght of my name: ".strlen($name)."<br><br>";
    echo "The strpos() function is used to search for a string character within a string. <br><br>";
    $mystring ="I am new to PHP <br><br>";
    echo "Position of the word(to) in the string is:". strpos($mystring , "to")."<br><br>";
    echo "The sub string is: ".substr($mystring, 4, 3). "<br><br>";
    echo "The sub string is: ".substr($mystring, 4)."<br><br>";
    echo "I live in $city. <br><br>";
    echo "I like $city. <br><br>";
    echo "****************************************************** <br><br>";

    ?>
</div>
<hr>
<div class="sub-div">
    <?php
    echo "<h3>Numbers - arthimetic operators </h3> <br><br>";
    $num1 = "62";
    $num2 = "40";
    echo " Addition Operation Result: ".$num1 + $num2 ."<br><br>"; 
    echo " Substration Operation Result: ".$num1 - $num2 ."<br><br>";
    echo " Multiplication Operation Result: ".$num1 * $num2 ."<br><br>";
    echo " Division Operation Result: ". $num1 / $num2 ."<br><br>";
    echo " Modulus Operation Result: ".$num1 % $num2 ."<br><br>";
    echo " Increment Operation Result: ". $num1++ ."<br><br>";
    echo " Decrement Operation Result: ". $num1-- ."<br><br>";
    echo "***************************************************** <br><br>";
    
    ?>
</div>
<hr>

<div class="sub-div">
    <?php
    echo "<h3>Numbers - incrementing decrementing operators</h3>";
    $a = 10;
    echo 'Value of $a is :'.$a ."<br>";
    echo '<br />After Pre-increment value of $a ( i.e. ++$a ) is: '.++$a ."<br><br>";
    $a = 20;
    echo '<br />Value of $a is :'.$a ."<br>";
    echo '<br />After Post-increment value of $a ( i.e. $a++ ) is: '.$a++ ."<br><br>";
    $a = 30;
    echo '<br />Value of $a is :'.$a ."<br>";
    echo '<br />After Pre-decrement value of $a ( i.e. --$a ) is: '.--$a ."<br><br>";
    $a = 40;
    echo '<br />Value of $a is :'.$a."<br>";
    echo '<br />After Post-decrement value of $a ( i.e. $a-- ) is: '.$a-- ."<br><br>";
        echo '************************************************************************<br >';      

    ?>
</div>
<hr>
<div class="sub-div">
    <?php
    echo "<h3>Numbers - comparison operators</h3> <br><br>";
    echo "Test Equal (==) operator :";
    $x = 300;
    $y = "300";
    var_dump ($x==$y) ."<br><br>";

    echo "Test Strict Equal (===) Operator ";
    var_dump($x===$y) ."<br><br>";

    echo "Test not Equal (!=) Operator ";
    var_dump($x != $y). "<br><br>";

    echo " Test not Identical (!==) Operator ";
    var_dump($x!==$y)."<br><br>";

    echo "Test Greater then Or Equal (>=) ";
    var_dump($x >= $y). "<br><br>";

    echo "Test Less than (<) Operator ";
    var_dump($x<$y). "<br><br>";

    echo "Test Less than or Equal (<=) Operator ";
    var_dump($x <= $y) . "<br><br>";
    echo "******************************************************<br><br>";

    ?>
</div>
<div class="sub-div">
    <?php
    echo "<h3>Numbers - Logic Operators </h3> <br><br>";
    echo "PHP logical || Operator <br><br>";
    $a = true && false;
    var_dump($a) ."<br><br>";

    $b = false && true;
    var_dump($b) ."<br><br>";

    $c = true && true;
    var_dump($c) ."<br><br>"; 

    $d = false && false;
    var_dump($d) ."<br><br>";

    $e = true || false;
    var_dump($e) ."<br><br>";

    $f = false || true ;
    var_dump($f) ."<br><br>";

    $g = true || true;
    var_dump($g) ."<br><br>";

    $h = false || false;
    var_dump($h) ."<br><br>";

    echo "******************************************** <br><br>";
?>
</div>
<hr>

<div class="sub-div">
    <?php
    echo "<h3>Numbers - Assignment Operator</h3>";
    echo "PHP assignment operator <br><br>";
    $x1=100;
    $x2=200;
    $x3=300;
    $x4=400;
    $x5=500;
    $x1+= 100;
    echo " $x1 <br />";
    $x2-= 200;
    echo " $x2 <br />";
    $x3*= 300;
    echo " $x3 <br />";
    $x4/= 400;
    echo " $x4 <br />";
    $x5%= 500;
    echo " $x5 <br />";
    $x=($y=11)+9;
echo " Value of x & y is :  $x  $y <br />";
echo "************************************************************<br><br>";



    ?>
</div>


</div>   
</body>
</html> 