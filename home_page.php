








<link rel="stylesheet" href="css/login.css">
<?php
// echo'<script type="text/JavaScript">
// alert("Hi, I am in Java Script.");
// </script>';


// echo ($_GET['username']);
// echo "<br>";
// echo($_GET['password']);




// if(isset($_GET['submit']))

// {
//     if(($username=='admin')==($username=='admin')){
//         echo '<script type="text/JavaScript"> alert("Hello, Welcome! You have sucessfully logged in.");
//         </script>';
//     }
//     else{
//         echo '<script type="text/JavaScript"> alert("Try again!");
//         </script>';
        
//     }
// }

$user = $_REQUEST['username'];
$lastname=$_REQUEST['last_name'];
$pass= $_REQUEST['password'];
$confirm = $_REQUEST['confirm_password'];
// $message ='';

if(isset($_REQUEST['submit'])){
    if(empty($user) || empty($pass || empty($lastname)))
    {
        echo '<script type="text/JavaScript"> alert("Field can not be empty");
        </script>';
    }
     
     if(strlen($pass) <8){
             echo '<h1>Password not valid. At least 8 charater is needed.
             </h1><script type="text/JavaScript"> alert("Not succesful.");
             </script>';
             
         }
       
           if( $confirm!==$pass)
           {
            echo '<h1> Password does not match! <a href="login_page.php">Try again</a></h1> <script type="text/JavaScript"> alert("Not successful.");</script>';
            }
            else if(($user==$user)&&(strlen($pass) >=8))
            {
                 $user.= $lastname;
                echo $user.','.'<h1>Welcome to our website.</h1> 
                <script type="text/JavaScript">alert("sucessfully logged in");</script>';
             }

        }
       
    echo "<pre>";
        print_r($_SERVER);
    echo "</pre>";

    echo $_SERVER['SERVER_PORT'];
    echo $_SERVER['REQUEST_METHOD'];

    
    
    
?>