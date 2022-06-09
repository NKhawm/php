<?php
     
     $pwd = "admin";
    $_SESSION['username']= $_REQUEST['username'];
    $_SESSION['password']=$_REQUEST['password'];
   

    if(isset($_REQUEST['submit']))
    {
        if($_REQUEST['password']!== $pwd)
        {
            session_start();
            echo "password not right";
        }
    }

















    // {
    //     // echo "<h1>Welcome ".$_SESSION['username']."</h1>";
    //     // echo "<a href ='product.php'> Product </a> <br><br>";
    //      echo "<script>location.href='welcome_page.php'</script>";
    //     //echo "<a href='session_logout.php'><input type=button value=logout name=logout></a>";
    // }
    // else
    // {
       
    //     if (empty($_SESSION['username']) && empty($_SESSION['password']))
    //     {
    //         echo "<script> alert('Fields can not be empty')</script>";
           
    //     }
    //     else if ($_REQUEST['username']==$_SESSION['username'] && $_REQUEST['password']==$_SESSION['password'])
    //     {
    //         //$_SESSION['username']=$_SESSION['username'];
    //         echo "<script>location.href='welcome_page.php'</script>";
    //     }
    //     else
    //     {
    //         echo "<script>location.href='session_login.php'</script>";
    //     }
    // }








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
    <h1>Login and Logout system</h1>
     <!-- <form action="home_page.php" method="get">  -->
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
        
        <label for="username" >Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
       
        <button type="submit" name="submit">Submit</button>  
    </form>
    
    
</body>
</html>