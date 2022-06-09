<?php
session_start();
echo "Welcome ".$_SESSION['username']."!";
echo "<br><br>";
echo "<a href ='product.php'> Product </a> <br><br>";
echo "<a href='session_logout.php'><input type=button value=logout name=logout></a>";

?>