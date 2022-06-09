<?php
//session variable
session_start();
$a=$_SESSION['fname'];
$b=$_SESSION['lname'];
echo $a.' '.$b;
echo "<br><br>";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "I am in SAE";
    echo $string.'<br>';
    $st = 'London';
    echo "<br>";
    $string.= ' '.$st;   // concat two string // output :"I am in SAE London"
                     //can also do like this => echo "$string $st"
    echo $string;
    echo "<br><br>";
?>
<h1>String function</h1>
StringLenght:<?php echo strlen($string); 
echo "<br><br>";?>

Strtolower: <?php echo strtolower($string);
echo "<br><br>";
?>

Strtoupper: <?php echo strtoupper($string);
echo "<br><br>";
?>

Upper: <?php echo ucfirst($string);
echo "<br><br>";
?>

Upper: <?php echo ucwords($string);
echo "<br><br>";
?>


wordcount: <?php echo str_word_count($string);
echo "<br><br>";
?>

Substring: <?php echo substr($string,6);
echo "<br><br>";
?>


Substring with specified end: <?php echo substr($string,2,7);
echo "<br><br>";
?>


printf: <?php printf ("Hi %s",$string);
echo "<br><br>";
?>


string_replacement: <?php echo str_replace('I am','We are',$string); //i want to change I am to (,) We are in(,)this $string
echo "<br><br>";
echo str_replace('London','Liverpool',$string);
echo "<br><br>";
?>


: <?php
$s = 1;
if(is_string($string))
{
    echo 'It is a string.';
}
echo "<br><br>";
$word ='       SAE';
echo strlen('$word');
echo trim($word);

$d = ltrim($word);
echo strlen($d);
echo "<br><br>";

?>


String reverse: <?php echo strrev($string);
echo "<br><br>";
?>

1. Write a program to Access Individual Characters and display.
<?php
$name = 'John';
for ( $i=0; $i<strlen($name);$i++){
 
    print("<br>" .$name[$i] . " <br> ");
   
}
echo "<br><br>";
?>

2.$str="PHP is open source and backend language,PHP is also a interpreted language";

<?php
echo "<br>";
$string_ ="PHP is open source and backend language,PHP is also a interpreted language.";
echo "<strong> $string_</strong>";
echo "<br><br>";
?>

3.Write a PHP program to reverse the string. 
<?php
$reverse = "A B C D E F G";
echo strrev($reverse);
echo "<br><br>";
?>

4.Write a PHP program to find the length of the string.
<?php
echo "<br><br>";
$lenght = "A B C D E F G";
echo strlen($lenght);
echo "<br><br>";
?>

5. Write a PHP program to count the words in the string.
<?php
echo "<br><br>";
$wc = "A B C D E F G";
echo str_word_count($wc);
echo "<br><br>";
?>

6.Write a PHP program to convert a string into uppercase,lowercase,ucfirst,ucwords.

<?php
echo "<br><br>";
$convert = "Hello, my name is Tiffiny. It's nice to meet you";
echo strtoupper($convert);
echo "<br>";
echo strtolower($convert);
echo "<br>";
echo ucfirst($convert);
echo "<br>";
echo ucwords($convert);
echo "<br><br>";
?>

7.Print substring.  
<?php
echo "<br><br>";
$sub_str = "I love PHP";
echo substr($sub_str,7);
echo "<br><br>";
?>

8.Write a program to replace the PHP word with Python in this string   I love PHP,I love PH

<?php
echo "<br><br>";
$substr = "I love PHP";
$substr1 =" I love PH";
echo "<strong>". str_replace('PHP','Python ',$substr)."</strong>";
echo ',';
echo "<strong>". str_replace('PH','Python ',$substr1)."</strong>";



echo "<br><br>";
?>

9.Write a function that takes 2 lowercase string
parameters and use concatenation to combine those strings in a single one. Next, modify the first character of the concatenated string to be uppercase and display the result.


<?php
echo "<br><br>";
$string1= "royal";
 $string2= "family";
// ($string1) .=' '.$string2;
// echo $string1;
echo strtoupper($string1).' '.$string2;
echo "<br><br>";
?>

10.Write a function that takes one string parameter
and finds the number of the characters in the string.
 Next, change the entire string characters into uppercase and display the result.

<?php
echo "<br><br>";
$c= "God save the Queen";
 
echo "The number of character in the string is:" .strlen($c) ."<br><br>";
echo strtoupper($c);

echo "<br><br>";
?>

10. Compare two strings 
<?php
echo "<br><br>";
$c= "Queen";
$e= "Majesty";
if( strcmp($c,$e) !== 0){
    echo "both strings are not equal.";
}
else{
    echo "both strings are equal.";
}
 

echo "<br><br>";



?>
12. Write a function that takes one string parameter
with 16 characters and displays the second half of the string using 
the substr() function.

<?php
echo "<br><br>";
$l = "abcdefghijklmnop";
 
echo strlen($l);
echo "<br>";
echo substr($l,8);
echo "<br><br>";
?>

**********
Given a variable $email containing the string user@example.com, 
which of the following statements would extract the string example.com?
<?php
echo "<br><br>";
$email = "user@example.com";
echo substr($email, strpos($email,"@")+1);
echo "<br><br>";
?>


<?php
$username = "jasoN";
if (preg_match("([^a-z])",$username))
  echo "Username must be all lowercase!";
else
  echo "Username is all lowercase!";
  echo "<br><br>";
?>


<?php
$text = "this is\tsome text that\nwe might like to parse.";
print_r(explode("[\n\t]",$text));
?>










</body>
</html>