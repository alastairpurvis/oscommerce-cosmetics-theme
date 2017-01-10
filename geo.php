#!/usr/bin/php -q
<?php

////////////////////////////////////////////
// Malaysian country redirection
////////////////////////////////////////////
include("includes/geoip.inc");
$gi = geoip_open("includes/GeoIP.dat",GEOIP_STANDARD);

echo "/////////////////////////////";
echo "Malaysian redirect diagnostic";
echo "/////////////////////////////<br><br>";

// Get user's IP
if ($_SERVER['HTTP_X_FORWARD_FOR']) {
	$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
echo "Your IP is " . $ip . "<br>";

// Identify country
$countrycode = geoip_country_code_by_addr($gi, $ip);
echo "Based on the IP given, we determine that your country code is: " . $countrycode."<Br>";

$malaysiancode = "MY";
echo "The Malaysian country code is: ". $malaysiancode."<br><br>";

if($countrycode == $malaysiancode)
{
	echo "Your IP is Malaysian. Therefore you redirect to the Malaysian server...http://www.skinnutrition.com.my";
	echo "<br><a href='http://www.skinnutrition.com.my'>Test this link</a>";
}
else
{
	echo "Your IP is not Malaysian. Therefore you redirect to the USA server...http://www.skinnutrition.com";
	echo "<br><a href='http://www.skinnutrition.com'>Test this link</a>";
}

geoip_close($gi);

?>
