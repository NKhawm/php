<?php

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
     <!-- <form action="home_page.php" method="get">  -->
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
        
        <label for="username" >First name:</label><br>
        <input type="text" name="firstname" id="username"><br><br>
        
        <label for="lastname">Last Name:</label><br>
        <input type="text" name="lastname" id="lastname"><br><br>
       
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select>
       <br><br>
        <button type="submit" name="submit">Submit</button>  
    </form>
    
    <?php
    
  $cookie_name=['firstname','lastname','gender']
   $cooke_value= array("$_REQUEST['firstname']","$_REQUEST['lastname']","$_REQUEST['gender']" )
   $submitted = (isset($cookie_value[]);
   if($submitted)
   {
       if($fname===$_REQUEST['firstname']){
           setcookie($cookie_name[],$cooke_value,time()+30);
          
           echo '<script type="text/JavaScript">alert("You sucessfully logged in.");</script>';
           echo "<script>location.href='cookie_login2.php'</script>";
        }  
    }
?>
</body>
</html>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female