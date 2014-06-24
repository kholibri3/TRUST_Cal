
<html>
<body>
<img src="smiley.gif" alt="Smiley face" width="42" height="42">

<?php

//above image: smiley.gif from w3schools http://www.w3schools.com/tags/att_img_src.asp

/*$flag = hi;
echo $flag;*/
echo "<br> <br>";

//$partyThree[0] = "numbaThree";

//header ("Refresh: 3; thirdPartyCookie.php");

if(isset($_COOKIE["numbaThree"]))
	echo "<strong>A third party cookie has been set.</strong>";
else
	echo "No third party cookie!";

//echo $_COOKIE['numbaThree'];
echo "<br> <br>";

print_r($_COOKIE);
// Print a cookie
//echo $_COOKIE["numbaThree];
echo "<br> <br>";

//echo "cookie?";

//$image_url='http://img2.wikia.nocookie.net/__cb20120507220415/p__/protagonist/images/f/f4/CookieMonster-Sitting.jpg';

   /* <img src="<?php echo $image_url;?>">*/

?>

</body>
</html>
