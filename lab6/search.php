<?php

$name = $_POST["FirstName"];
// echo $name;
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("file.txt"))."<br>";
// Output one line until end-of-file
while (!feof($myfile)) {

    $x=  fgets($myfile);
    echo $x;
    $tokens = explode(",", $x);
    echo "data".$tokens[0].", ".$tokens[1].'<br>';


}

fclose($myfile);