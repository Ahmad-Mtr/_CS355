<!-- If the user press on login, the php file should check if the user and password in the data -->
<!-- base, if available print successful login, else print invalid username or password. -->

<?php

$name = $_POST["username"];
$password = $_POST["_password"];


$servername = "localhost";
$devUserName = "root";
$devPassword = "";
$db = "student";

$conn = mysqli_connect($servername, $devUserName, $devPassword, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "Select * from loginfo where username = '".$name."' AND password = '".$password."';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    echo "Succesful Log in";
}else{
  
    echo "Invalid Log in 🥔";
}

mysqli_close($conn);

