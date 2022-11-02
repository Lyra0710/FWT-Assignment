<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "credentials";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error)
// {
// die("Connection failed: " .$conn->connect_error);
// }
print_r($_POST);
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$currentaddress = $_POST['currentaddress'];
$email = $_POST['email'];
$password  =$_POST['psw'];



if(!empty($firstname) || !empty($phone)|| !empty($email) || !empty($password)){
    $host="localhost";
    $dbUsername= "root";
    $dbPassword="";
    $dbname="credentials";

    //create connection
    $conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else {
        $SELECT = "SELECT email FROM user WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO user(First_Name, Middle_Name, Last_Name, Gender, Phone, Current_Address, Email, Password) values('$firstname','$middlename','$lastname','$gender','$phone','$currentaddress','$email','$password')";

        $InsertQuery = $conn->query($INSERT);
    }

}
header('Location: LoginPage.php');
exit;



?>