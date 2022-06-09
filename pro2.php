

<?php
$s=10;             // assign variable
echo var_dump($s);  //type  checking
echo "<br>";
$m="Welcome to";
$name="SAE";
var_dump($name);
echo "<br>";
echo $m;           //printing
echo "<br>";
print $name;
echo "<br><br>";

echo "********* isset()function *********";
$mycity=10;
echo '<br>'.'<h1>'. isset($mycity) . '<h1>';
echo '<br>'.'<h1>'. var_dump(isset($mycity)) . '<h1>';

// $a =30;
// $b =21;
// echo $a>$b;
// echo $a<$b;
// echo $a<=$b;
// echo $a<=$b;


$h =100;
$g ='100';
echo var_dump($h==$g);
echo var_dump($h===$g);

//increment operator ++
//decrement operator --
$a=10;
$a++; //11
$a--; // 9
$a=$a+2;//12 //when doing more than 1 
$a+=2; //12
echo $a;

?>