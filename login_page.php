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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <label for="username" >First Name:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="last_name" >Last Name:</label><br>
        <input type="text" name="last_name" id="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <label for="confirm_password" >Confirm Password:</label><br> 
        <input type="password" name="confirm_password" id="username"><br><br> 
        <label for="email" >Email:</label><br> 
        <input type="text" name="email" id="email"><br><br> 
        <label for="telephone" >Telephone:</label><br> 
        <input type="number" name="telephone" id="telephone"><br><br> 
        <button type="submit" name="submit">Submit</button>  
    </form>
    
    
    
</body>
</html>