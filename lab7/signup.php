<!-- If the user press on signup, the php file should check if the username already exist, print -->
<!-- that the username is already exists, if not insert it into the database. -->

<?php

$name = $_POST["FirstName"];
$password = $_POST["_password_"];


$servername = "localhost";
$devUserName = "root";
$devPassword = "";
$db = "student";

$conn = mysqli_connect($servername, $devUserName, $devPassword, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "Select * from loginfo where username = '".$name."';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
    echo "Username already exists";
}else{
    $q = "INSERT INTO loginfo (username, password) VALUES ('".$name."', '".$password."');";
    $result = mysqli_query($conn, $q);
    echo "Registerd Succesfully";
}

mysqli_close($conn);

