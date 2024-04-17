<?php

$name = $_POST["FirstName"];
// echo $name;
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while (!feof($myfile)) {

   
    $line = fgets($myfile);
    $tokens = explode(",", $line);
    for ($i=0; $i < 5; $i++) { 
        if (trim($tokens[$i]) === $name) {
            echo "Student found: " . $tokens[$i]." ".$tokens[$i+1];
        }
    }

}

fclose($myfile);