
<?php
    if(isset($_GET['submit']))//session variable has to be on the top of the page
   {
    session_start();
    $_SESSION['fname']=$_GET['username'];
    $_SESSION['lname']=$_GET['last_name'];
    
    print $_SESSION['fname'].' '.$_SESSION['lname'];
   
}
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
    <!-- <form action="home_page.php" method="get"> or  -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
        <label for="username" >First Name:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="last_name" >Last Name:</label><br>
        <input type="text" name="last_name" id="username"><br><br> 
        <button type="submit" name="submit">Submit</button>  
    </form>
    

</body>
</html>