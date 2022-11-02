
<?php
    
    include("connection.php");
     
    if(isset($_POST['login'])) {
        $sql = mysqli_query($conn,
        "SELECT * FROM user WHERE Email='"
        . $_POST["email"] . "' AND
        Password ='" . $_POST["psw"] . "'    ");
       
        $num = mysqli_num_rows($sql);
       
        if($num > 0) {
            $row = mysqli_fetch_array($sql);
            header("location:ContentPage.html");
            exit();
        }
        else {
            ?>
            <hr>
            <font color="red"><b>
                    <h3 class = "p3">Sorry Invalid Username and Password<br>
                        Please Enter Correct Credentials</br></h3>
                </b>
            </font>
            <hr>
     <?php

          }
    }
    ?>

<!DOCTYPE html> 
<html> 
<head>
<link rel="stylesheet" href="Login.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>

</head>  
<body>  
    <center> <h1> Login </h1> </center> 
    <form  method = "POST" action = "LoginPage.php">
        <div class="container"> 
            <label>Email : </label> 
            <input type="text" placeholder="Enter Email" name = "email" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name = "psw" required>
            <button name = "login" class = "button2" type="submit" onclick="window.location.href = 'ContentPage.html';">Login</button> 
            <input type="checkbox" checked="checked"> Remember me <br>
            <button class = "button" type="button" class="cancelbtn"> Cancel</button> 
            Forgot <a href="#"> password? </a> 
        </div> 
    </form>   
</body>   
</html>