<!-- 
<html>
<body> -->

<?php

$name = $_POST['name'];
$email = $_POST['email'];

echo "Welcome " . $name . "! <br>";
echo "Your email address is: " . $email . "."; 

//expire time in seconds
$longexpire=time()+8;
$shortexpire=time()+5;
setcookie("berks", "1st party cookie A", $longexpire, "/");
setcookie("cal", "1st party cookie B", $shortexpire, "/");

//chmod change properties in terminal on .txt file
//terminal: sudo chmod -R 777 textfile.txt

//$savedata = $_REQUEST['savedata'];
//if ($savedata == 1){ 

//$name = $_POST['name'];
//$email = $_POST['email'];

///Library/WebServer/Documents/
//FIX PERMISSIONS 777

$text = "$name   $email  " . PHP_EOL;
$file = fopen("textfile.txt", "a+") or die("Couldn't open textfile.txt for writing!");
fwrite($file, $text) or die("Couldn't write values to file!"); 

fclose($file); 
echo "<strong><br> <br> Your Form has been Submitted!</strong>";

//refresh goes to the specified page in specified number of seconds
header ("Refresh: 3; printCookie.php");
//header ("location: printCookie.php");

?>

<!-- <form method="link" action="printCookie.php" >
<input type="submit" value="Where are my cookies?" >
</form>

</body>
</html> -->
