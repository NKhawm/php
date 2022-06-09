<?php
$a =10;
//if($a<20)
// {
//     echo "$a is less than 20";
// }
// else if ($a>15)
// {
//     echo "$a is less than 15";

// }
// else {
//     echo "$a";
// }
$b='10';

// ==
if($a==$b){
    echo "$a is equal to $b";

}
else{
    echo "Not equal";
}
echo "<br><br>";

// ===
if($a===$b){
    echo "$a is equal to $b";

}
else{
    echo "Not equal";
}
echo "<br><br>";

$c=10;
$d=20;
$e=30;
if(($c>$d) && ($c>$e))
{
    echo "$c is the greatest number";
}
else if($d>$c)
{
    echo "$d is the greatest number";
}
else{
    echo "$e is the greatest";
}


?>
