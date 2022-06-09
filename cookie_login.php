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
        
        <label for="username" >Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
       
        <button type="submit" name="submit">Submit</button>  
    </form>
    
    <?php
    
   $name=$_REQUEST['username'];
   $pass=$_REQUEST['password'];
   $submitted = (isset($name)) && (isset($pass));
   if($submitted)
   {
       if($pass==='admin')
       {
           setcookie('name',$name,time()+30);
           echo '<script type="text/JavaScript">alert("You sucessfully logged in.");</script>';
           echo "<script>location.href='cookie_login2.php'</script>";
       }
  }
?>
</body>
</html>
