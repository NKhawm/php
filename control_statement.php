<?php
echo "<h1>Assignment of Control Statement</h1> <br><br>";
echo "1.You need to write a PHP program to calculate electricity bills using if-else conditions.";
//------
// $amount ='';
// $kwh_usage='';
// if(isset($_POST['submit'])){
//     $units = $_POST['kwh'];
//     if(!empty($units)){
//         $kwh_usage =calculate_electricity_bill($units);
//         $amount = '<strong> Total amount of '.$units.'units -</strong>' .$kwh_usage;
//     }
//     }

// function calculate_electricity_bill($units){
//     $first_unit_cost =3.5;
//     $second_unit_cost = 4;
//     $third_unit_cost = 5.20;
//     $fourth_unit_cost = 6.50;

//     if ($units <= 50 ){
//         $bill = $units * $first_unit_cost;
//     }
//     else if ($units > 50 && $units <= 150){
//         $temp = (50 * $first_unit_cost)+(100 * $second_unit_cost);
//         $remaining_units = $units -100;
//         $bill = $temp + ($remaining_units * $second_unit_cost);

//     }
//     else if ($units > 100 && $units <= 250){
//         $temp = (50 * $first_unit_cost)+(100 * $second_unit_cost) + ($units * $third_unit_cost);
//         $remaining_units = $units -100;
//         $bill = $temp + ($remaining_units * $third_unit_cost);
//     }
//     else {
//         $temp = (50 * $first_unit_cost)+(100 * $second_unit_cost) + ($units * $third_unit_cost) + ($units * $fourth_unit_cost);
//        $remaining_units = $units -100;
//         $bill = $temp + ($remaining_units * $fourth_unit_cost);
//     }
//     return number_format(float)$bill, 2,'.','');


// }
// ?>
 <!-- <div class="container">
// 		<h1>Calculate electricity bill in PHP</h1>
// 		<div class="form-group">
// 		<form action="" method="post">
// 		<div class="form-group">
// 			<input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
// 		</div>
// 		<div class="form-group">		
// 			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
// 		</div>	
// 		</form>
// 		</div>
// 		<div>
// 		    <?php echo '<br />' . $amount; ?>
// 		</div>
// 	</div> -->


<?php
echo "<br><br>";
echo "2.Write a PHP program to check if a person is eligible to vote";
echo "<br><br>";
$age=11;
if($age==18)
{
    echo " - Congratulation! You are eligible for voting";
}

else if ($age<18)
{
    echo " - Sorry, you have to be at least 18 to vote";
}
echo "<br><br>";

//------------------3----------------------
echo "3. Write a PHP program to check whether a number is positive, negative or zero";
echo "<br><br>";
$num= 34;


if($num>0)
{
 echo "- $num is a positive number" ;  
}
else if ($num<0)
{
    echo "- $num is a negative number";
}
else if ($num==0)
{
echo "- The number you entered is Zero.";
}
echo "<br><br>";

// ---------------------4-----------------
echo "4. How to check if an array is a subset of another in PHP?";
echo "<br><br>";
$arr1 = ['q',2,4,3,5,'g'];
$arr2 =['g',2];
if (array_intersect($arr1,$arr2)===$arr2)
{
    echo "- It is a subset.";
}
else{
    echo "- It is not a subset.";
}




?>