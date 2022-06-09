<?php
echo "1. Write a program to print “Hello PHP” using the php variable? <br>
";
$name="PHP";

echo " - Hello $name.<br> <br>"; //to print the value with another string

echo "2. Write a program to print “Welcome to the PHP World with a PHP script that uses a built-in PHP function  echo to output the text Hello World!” 
using some part of the text in variable & some part directly in echo.
For example: $name='PHP world'<br>";
$n="PHP world";
echo "- Welcome to the $n. <br><br>";

echo "3. Write a program to print 2 php variables using a single echo statement.<br>";
$fname = "John";
$lname = "Norman";

echo "- Hello, my name is $fname $lname.<br><br>";

echo "4. Write a program to sum two variables.
Output should be like this The addition of 10 and 20 is 30
<br>";
$t=10;
$s=20;
$sum =$t +$s;
echo "- The addition of $t and $s is $sum.<br><br>";

echo " 5. Write a program to calculate the string length. <br>";
echo strlen ("Hello");
echo "<br><br>";

echo "6. Write a program to use the number function floor() and ceil().<br>";
echo(floor(0.40) . "<br>");
echo (ceil(5) . "<br>");
echo (ceil(0.40) . "<br><br>");

echo "7. Write a program to check data type of the following variable <br>";
$a=10;
$b=12.89;
$string="SAE";
$d=true;
echo var_dump($a);
echo "<br>";
echo var_dump($b);
echo "<br>";
echo var_dump($string);
echo "<br>";
echo var_dump($d);
echo "<br><br>";

echo "8. Write a program to increment the value of a by 2 using shorthand operator <br> ";
$i =10;
$ii = $i + 2;
echo "Incrementing $i by 2 is $ii <br><br>";

echo "9. write a program to increment the value of a variable using increment operator.
<br>";
echo "$i++ <br><br>";

echo "10. Write a program to divide two numbers a=20 and b=4.The result should be in float.

<br><br>";
$u = 20;
$v = 4;
$ans = $u / $v;
echo "The answer is: ". $ans . "<br>";

 


?>