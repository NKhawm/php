<?php
session_start();
echo "Welcome to our website ".$_SESSION['username']."!";
echo "<br><br>";
echo "<a href= 'welcome_page.php'><input type=button value =back name=back></a>";

?>