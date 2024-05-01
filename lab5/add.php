
<?php

$name = $_POST['newStudentName'];
$number = $_POST['newStudentNumber'];

$data = "".$name.",".$number.",";

$myfile = fopen("file.txt", "a") or die("Unable to open file!");
    echo fwrite($myfile, $data);
    
    fclose($myfile);