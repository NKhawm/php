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
    
//1st method to use array

$array = [1,3,4,8,9];
print_r ($array);     // to print array we use print_r()
echo  "<br><br>";

//2nd method to use array
$array1 = array(34,2,3,4,78);
print_r($array1);
echo  "<br><br>";

// add the element at the end
$array1[]='Maya'; // no need to mention the index
print_r($array1);
echo  "<br><br>";

//To update the value
$array1[1]=34.5;   
print_r($array1);
echo  "<br><br>";

//To add two array - array function
$array2=array_merge($array,$array1);
print_r($array2);  
echo  "<br><br>"; 

// or 

print_r(array_merge($array, $array1));
echo  "<br><br>";
echo 'After merge: ';
echo "<pre>";       //to change the format ----start
print_r($array);
echo "</pre>";      // to change the format ------end
echo  "<br><br>";

//to count how many element in the array

$c=count($array);
echo "<h3>The number of element in the array is : $c </h3>   <br><br>";

echo "Practice 1 .Write a PHP script which will display the colors in the following way:";
$colors = ['c','c++','java','PHP'];
 echo "<pre>";
 print_r($colors);
 echo "</pre> <br><br>";

 echo "<ul>";
 foreach($colors as $color)
 {
     echo "<li>$color</li>";
 }
 echo "<br><br>";

 //------

 echo " Practice 2. Write a PHP script which will display in bullet points. <br><br>";
 $fruits = array('Apple','Apricot','Avocado','Banana','Blackberries','Blackcurrent','Blueberries');
echo "<ul>";
foreach($fruits as $frt)
{
    echo "<li>$frt</li>";
}
echo "<br><br>";

//--------

echo "Practice 3.Write a program to add 10 random numbers and calculate the average. <br><br>";
$myArray = array (3,5,5.5,8,9,2,4,6,4,2.3);
$average = array_sum($myArray) / count($myArray);
echo "The average number of (3,5,5.5,8,9,2,4,6,4,2.3) is: $average";
echo "<br><br>";

//-------

//Associative array
echo "<h3>Associative Array.</h3> <br>";

$ass_arr=['Name'=>'Sofia','Lastname'=>'Smith', 'ge'=> 23];  // ass array you have to put a key and the value
print $ass_arr['name'];
echo"<pre>";
print_r($ass_arr);
echo "</pre>";
//using foreach 
foreach($ass_arr as $x => $x_value) {
    echo "Key=" . $x . ",Value=". $x_value;
    echo "<br><br>"; 
}
$ass_arr[]=['Name'=> 'Emily','Age'=>25];
echo "<pre>";
print_r($ass_arr);
echo "</pre>";

//Multidimentional array
echo "<h3>Multidimentional array</h3>";
$array_mul=[
    ['John','Smith','red',23],
    ['Maria','Reddy','green',24],
    ['Simon','Paul','blue',34],
];
echo "<pre>";
print_r($array_mul);
echo "</pre>";

//or mul and ass together
$arr_mul=[
    ['name'=>'John','lastname'=>'Smith', 'color'=>'red', 'age'=>23],

    ['name'=>'Maria','lastname'=>'Reddy', 'color'=>'green', 'age'=>24],

    ['name'=>'Simon','lastname'=>'Paul', 'color'=>'blue', 'age'=>34],

];
echo "<pre>";
print_r($arr_mul);
echo "</pre>";
echo "<br><br>";

echo "Practice 4. $x = array(1, 2, 3, 4, 5)
Delete an element from the above array and display the array after delete the element.
";
$x = array(1,2,3,4,5);
unset($x[3]);
echo "<pre>";
print_r($x);
echo "</pre>";
echo "<br><br>";

//---------
echo "Practice 5.Write a program to sort the array.For example array [90,20,3,10,3,4]";
$sort_arr=[90,20,3,10,3,4];
asort($sort_arr);
echo "<pre>";
print_r($sort_arr);
echo "</pre>";
echo "<br><br>";
//--------
arsort($sort_arr);
echo "<pre>";
print_r($sort_arr);
echo "</pre>";
echo "<br><br>";

//---------
echo "Practice 6.Write a program to loop through an associative array using foreach() or with each().<br><br>";
$d = array('One'=>'Cat', 'Two'=>'Dog','Three'=>'Elephant','Four'=>'Fox');

foreach($d as $b => $b_value){
    echo  $b . $b_value;
    echo "<br><br>"; 
}

//PHP array assignment
echo "<h3>Home assignment</h3>";
$myArr= [
    ['First Name'=>'Mickey','Last Name'=>'Mouse','Adress'=>'123 Fantacy Way', 'City'=>'Anaheim','Age'=>'73'],
    ['First Name'=>'Bat','Last Name'=>'Man','Adress'=>'321 Cavern', 'City'=>'Gotham','Age'=>'54'],
    ['First Name'=>'Wonder','Last Name'=>'Woman','Adress'=>'987 Truth Way', 'City'=>'Paradise','Age'=>'39'],
    ['First Name'=>'Donald','Last Name'=>'Duck','Adress'=>'555 Quack Street', 'City'=>'Mallard','Age'=>'65'],
    ['First Name'=>'Bugs','Last Name'=>'Bunny','Adress'=>'567 Carrot Street', 'City'=>'Rascal','Age'=>'58'],
    ['First Name'=>'Wiley','Last Name'=>'Coyote','Adress'=>'999 Acme Way', 'City'=>'Canyon','Age'=>'61'],
    ['First Name'=>'Cat','Last Name'=>'Woman','Adress'=>'234 Purrfect Street', 'City'=>'Hairball','Age'=>'32'],
    ['First Name'=>'Tweety','Last Name'=>'Bird','Adress'=>'543 Nest Road', 'City'=>'Itotltaw','Age'=>'28'],

];
$table = "<style>

table,th,td{
border:2px solid black;
border-collapse: collapse;
text-align:center;
font-weight:bold;
}

table{
    width:50%;
}

th{
    height:50px;
    background-color:grey;
    color:white;
}

tr:nth-child(even){
     background-color:#f2f2f2;
}

tr:hover{
     background-color:skyblue;
}
td{
    padding:20px;
}









</style>";

$table .= "  <table>
                     <thead>
                     <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Age</th>
                          </tr>
                          </thead>
                          <tbody>";
foreach($myArr as $m){
    $table .= "<tr>
                    <td>{$m['First Name']}</td>
                    <td>{$m['Last Name']}</td>
                    <td>{$m['Adress']}</td>
                    <td>{$m['City']}</td>
                    <td>{$m['Age']}</td>
                    </tr>";
}
$table .= " </tbody>
                 </table> ";

echo $table;

echo "<br><br>";

//-------
// echo " 8. You need to write a program in PHP to remove a specific element by value from an array using a PHP program.";
// $delete_item= 'October';
// $months = array ('January','February','March','April','May','June','July','August','September','October','November','December');


// if($key=array_search($delete_item, $months)) !== false){
//     unset($months[$key]);
// }
// var_dump($months);

$delete_item = 'October';
$months = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
foreach( array_keys($months, $delete_item) as $key){
    unset($months[$key]);
}
var_dump($months);
echo "<br><br>";

//----------
echo "9. Write the program to sort the array and display.";
$color = ['Green', 'Amber', 'Red'];
sort($color);
echo "<pre>";
print_r($color);
echo "</pre>";
echo "<br><br>"

?>
</body>
</html>

