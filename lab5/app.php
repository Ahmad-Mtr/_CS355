<?php

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$dateOfBirth = $_POST['dateOfBirth'];
(String) $age = 2024 - $dateOfBirth;
if ($dateOfBirth < 0) {
 echo "ERROR<br>Negative Number";
} else {
    

 echo "Hello, $fname $lname,  You were born in $dateOfBirth and you are $age old";

}


