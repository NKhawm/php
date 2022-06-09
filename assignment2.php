
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/assignment2.css">
<head>
<title>Lab 1: PHP</title>
 
</head>
 
<body>
 
 
 
 
<h1 style="font-size:24px;">Database & Back-end Development<br>Lab 1: Embedding PHP Variables & Operators in HTML</h1>
 
<div class="mainDiv"><!-- START THE MAIN DIV -->
            <!-- SUBDIV 1 -->
          <div class="subDiv">
           <h4 style="text-align: center;">Display string to screen using <b>echo</b></h4>
           <?php
                echo "Hello PHP<br><br>"; // print the Hello PHP to the screen
 
                echo "I am a string"; // print This is a string to the screen
 
                echo "<p>I am  a <b>paragraph</b> inside PHP!</p>";
                echo 'I am another echo with single quotes<br><br>';
                echo '************************************************************************<br >';
 
                ?>
               
           </div>
            <hr>
       
         
                 <!-- SUBDIV 2 -->
          <div class="subDiv">
           <h4 style="text-align: center;">Get the PHP version and configuration information</h4>
           <?php
                echo phpinfo();
                echo '************************************************************************<br >';
 
                ?>
               
           </div>
            <hr>          
 
     
         
             <!-- SUBDIV 3 -->
          <?php
          echo "<div class='subDiv'> "; //embeded php in the html
         echo "<h4>Using comments</h4>";
         echo 'Use // for a one line comment<br><br>';
         echo 'Use /*  */ for a multi lines comments<br><br>';
         echo 'Use # for a one-line shell-style comment<br><br>';
         echo '************************************************************************<br >';
         echo "</div> ";
         
           ?>
           <hr>
           
 
           
              <!-- SUBDIV 4 -->
          <div class="subDiv">
           
            <?php
            echo "<h4>dollar sign ($), Semi Colon</h4>";
            echo "PHP variable always start with dollar sign<br><br>";
            echo "Always add a semi colon to the end of each line<br><br>";
            echo '************************************************************************<br >';
            ?>
         
           </div>
           <hr>
           
              <!-- SUBDIV 5 -->
          <div class="subDiv">
             <?php
              echo '<h4>Variables</h4>';
              echo "The type of a variable is not set by the programmer, it is set by PHP depending on the context in which that variable is used<br><br>";
              echo "variables is decalared and assigned to vlaues at the start<br><br>";
              $a_bool = TRUE;   // a boolean variable
              $a_str  = "foo";  // a string variable
              $a_str2 = "foo";  // a string variable
              $an_int = 12;     // an integer variable
              $fruite; // Declare a variable
              $sweet;  // Declare a variable
              echo "Use (.) for concatenation in PHP";
              echo "I am a boolean variable (TRUE / FALSE) ".$a_bool."<br><br>";
              echo "I am a string variable with double quotation ".$a_str.'<br><br>';
              echo "I am a string variable with single quotation ".$a_str2_bool."<br><br>";
              echo "I am an intger variable (number) ".$an_int."<br><br>";
              echo "variables can be declared at the start and then assign to vlues later<br><br>";
              $fruite= "apple";
              $sweet="chocolate";
              echo "I am a string variable ".$fruite."<br><br>";
              echo "I am a string variable ".$sweet."<br><br>";
              echo '************************************************************************<br >';
             ?>
         
            </div>
           <hr>
 
             
              <!-- SUBDIV 6 -->
         <?php
          echo "<div class='subDiv'>";
          echo "<h4>Booleans</h4>";
          echo "This is the simplest type. Boolean can be either TRUE or FALSE<br><br>";
          $new = TRUE;
          $old = FALSE;
          echo "The product is new ". $new."<br><br>";
          echo "The product is old ". $old."<br><br>";
          echo '************************************************************************<br >';
          echo "</div>";
         
         ?>
           <hr>
           
             <!-- SUBDIV 7 -->
          <?php
          echo "<div class='subDiv'>";
          echo "<h4>String</h4>";
          echo "String is a squence of characters<br><br>";
          $myname = "Fred";
          $mycity = "Liverpool";
         
          echo "My name is " .$myname." and I am from ".$mycity. "<br><br>";
          echo "Concatenation is used in the above example <br><br>";
          echo "find the string length of my city: ".strlen($mycity)."<br><br>";
          echo "find the string length of my name: ".strlen($myname)."<br><br>";
          echo "The strpos() function is used to search for a string or character within a string<br><br>";
          $mystring = "I am new to PHP<br><br>";
          echo "Position of the word(to) in the string is: ".strpos($mystring, "to")."<br><br>";
          echo "The sub string is: ".substr($mystring, 4, 3). "<br><br>";// 4 is the start point and the second number is the length
          echo "The sub string is: ".substr($mystring, 4). "";//leave out the second number, it takes all the characters from the first number
          echo "I live in $mycity<br><br>"; // with double quotes, the variable can be inside the string
         
          //echo 'I like $mycity<br>';  // with single quotes it cannot
         
          echo 'I like '.$mycity.'<br><br>';    // with single quotes use concatenation
         
          echo '************************************************************************<br >';
          echo "</div>";
         
          ?>
           <hr>
             
              <!-- SUBDIV 8 -->
           <?php
          echo "<div class='subDiv'>";
          echo "<h4>Numbers - arthimetic operators</h4>";
         $number1 = 62;
         $number2 = 40;
         
         $result = $number1 + $number2;
         echo "Addtion Operation Result: $result <br><br>";
         
         $result = $number1 - $number2;
         echo "Substraction Operation Result: $result <br><br>";
         
         $result = $number1 * $number2;
         echo "Multiplication Operation Result: $result <br><br>";
         
         $result = $number1 / $number2;
         echo "Division Operation Result: $result <br><br>";
         
         $result = $number1 % $number2;
         echo "Modulus Operation Result: $result <br><br>";
         
         $result = $number1++;
         echo "Increment Operation Result: $result <br><br>";
         
         $result = $number1--;
         echo "Decrement Operation Result: $result <br><br>";
       
         
           
          echo "<div class='subDiv'>";
          echo "<h4>Numbers - incrementing decrementing operators</h4>";
           
         $a = 10;
     echo 'Value of $a is :'.$a;
     echo '<br />After Pre-increment value of $a ( i.e. ++$a ) is: '.++$a;
     $a = 20;
     echo '<br />Value of $a is :'.$a;
     echo '<br />After Post-increment value of $a ( i.e. $a++ ) is: '.$a++;
     $a = 30;
     echo '<br />Value of $a is :'.$a;
     echo '<br />After Pre-decrement value of $a ( i.e. --$a ) is: '.--$a;
     $a = 40;
     echo '<br />Value of $a is :'.$a;
     echo '<br />After Post-decrement value of $a ( i.e. $a-- ) is: '.$a--;
         echo '************************************************************************<br >';      
 
         
         echo "<h4>Numbers - comparison operators</h4>";
         echo "Test Equal (==) operator<br><br>";
         
         $x = 300;
         $y = "300";
         var_dump($x == $y);//the output will be:bool(true)
         echo "Test Strict equal (===) operator <br><br>";
         
         $x = 300;
         $y = "300";
         var_dump($x === $y);//the output will be:bool(false)
         echo "Test Not equal (!=) / (<>) operator <br><br>";
         
         $x = 150;
         $y = "150";
         var_dump($x != $y);//the output will be:bool(false)
         echo "Test Not identical (!==) operator <br><br>";
         
         $x = 150;
         $y = "150";
         var_dump($x !== $y);//the output will be: bool(true)
         echo "Test Greater than or equal (>=) operator<br><br>";
         
         $x = 300;
         $y = 100;
         var_dump($x>=$y);//the output will be: bool(true)
         echo "Test Less than (<) operator<br><br>";
         
         $x = 100;
         $y = 300;
         var_dump($x<$y);//the output will be: bool(true)
         echo "Test Less than or equal (<=) operator <br><br>";
         
         $x = 300;
         $y = 100;
         var_dump($x<=$y);
         echo "<br><br>";
         echo '************************************************************************<br >';
         
       
         echo "<h4>Numbers - logic operators</h4>";
         echo "PHP logical || operator<br><br>";
         
         $a = true && false;
         var_dump($a);
         $b = false && true;
         var_dump($b);
         $c = true && true;
         var_dump($c);
         $d = false && false;
         var_dump($d);
         $a = true || false;
         var_dump($a);
         $b = false || true;
         var_dump($b);
         $c = true || true;
         var_dump($c);
         $d = false || false;
var_dump($d);   //bool(false)  bool(false) bool(true) bool(false) bool(true) bool(true) bool(true) bool(false)
 
         echo "<br><br>";
         echo '************************************************************************<br >';
         echo "<h4>Numbers - assignment operators</h4>";
 
echo "PHP assignment operator<br><br>";
         
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
echo " Value of x & y is :  $x  $y <br />";//200   0   90000 1  0  Value of x & y is : 20 11
         echo "<br><br>";
         echo '************************************************************************<br >';
         echo "</div>";
         
         ?>
           <hr>
           
           
   </div>
 
</body>
 
</html>
 

