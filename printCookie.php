<?php

//$a = array($_COOKIE["berks"], $_COOKIE["cal"]);

if(isset($_COOKIE["berks"]))
	echo "<strong>A first party cookie A has been set.</strong>";
else
	echo "No first party cookie A!";

echo "<br>";

if(isset($_COOKIE["cal"]))
	echo "<strong>A first party cookie B has been set.</strong>";
else
	echo "No first party cookie B!";

echo "<br> <br>";


// Print a cookie
echo $_COOKIE["berks"];
echo "<br>";
echo $_COOKIE["cal"];
echo "<br> <br>";

//to delete a cookie, give it negative time (time()-60)

header ("Refresh: 5; printCookie.php");
header ("Refresh: 3; printCookie.php");

// A way to view all cookies in array form
//print_r($_COOKIE);

//header ("Refresh: 8; thirdPartyCookie.php");

/*setcookie("cal", "false", time()+5);
echo $_COOKIE["cal"];
echo "<br> <br>";*/

//echo (if(!empty($_COOKIE)));
//$cookies = print_r($_COOKIE, true);
//$emptyCookies = array();


if(!empty($_COOKIE))
{
	// A way to view all cookies in array form
	print_r($_COOKIE);
}
else
{
    
    //delete two first party cookies
	setcookie("berks", "1st party cookie A", time()-60, "/");
	setcookie("cal", "1st party cookie B", time()-60, "/");

    $expire=time()+21;
    setcookie("numbaThree", "PARTY", $expire, "/");


    header ("Refresh: 3; thirdPartyCookie.php");

/*    $expire=time()+10;
    setcookie("numbaThree", "PARTY", $expire);

    // Print a cookie
    echo $_COOKIE["numbaThree"];
    echo "<br> <br>";*/


   // $image_url='http://img2.wikia.nocookie.net/__cb20120507220415/p__/protagonist/images/f/f4/CookieMonster-Sitting.jpg';

   /* <img src="<?php echo $image_url;?>">*/

	//header ("location: thirdPartyCookie.php");
}

?>

<!-- <html>
<body>

<img src="thirdPartyCookie.php" alt="Smiley face" width="42" height="42">

</body>
</html>
 -->
