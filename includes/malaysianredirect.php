<?php

////////////////////////////////////////////
// Malaysian country redirection
////////////////////////////////////////////
include("includes/geoip.inc");
$gi = geoip_open("includes/GeoIP.dat",GEOIP_STANDARD);

if($diagnostic)
{
echo "/////////////////////////////";
echo "Redirect diagnostic";
echo "/////////////////////////////<br><br>";
}

// Get user's IP
if ($_SERVER['HTTP_X_FORWARD_FOR']) {
	$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

if($diagnostic)
{
echo "Your IP is " . $ip . "<br>";
}

// Identify country
$countrycode = geoip_country_code_by_addr($gi, $ip);
if($diagnostic)
{
echo "Based on the IP given, we determine that your country code is: " . $countrycode."<Br>";
}

$malaysiancode[0] = "MY"; // Malaysia
$malaysiancode[1] = "IN"; // India
$malaysiancode[2] = "BN"; // Brunei
$malaysiancode[3] = "KH"; // Cambodia
$malaysiancode[4] = "CC"; // Cocos Islands
$malaysiancode[5] = "TP"; // East Timor
$malaysiancode[6] = "HK"; // Hong Kong

$malaysiancode[7] = "ID"; // Indonesia
$malaysiancode[8] = "LA"; // Laos
$malaysiancode[9] = "MN"; // Myanmar
$malaysiancode[10] = "PH"; // Philippines
$malaysiancode[11] = "SG"; // Singapore
$malaysiancode[12] = "TH"; // Thailand
$malaysiancode[13] = "VN"; // Vietnam
$malaysiancode[14] = "KP"; // North Korea
$malaysiancode[15] = "KR"; // South Korea
$malaysiancode[16] = "TP"; // Japan
$malaysiancode[17] = "CN"; // China
$malaysiancode[18] = "AE"; // UAE

if($diagnostic)
{
echo "The Asian country codes in our database are: "; 

	foreach($malaysiancode as $num => $name)
	{
		echo $name . " ";
	}
	echo "<br><br>";
}

foreach ($malaysiancode as $num => $name)
{
	if($countrycode == $name)
	{
		$isasian = true;
	}
}

if($isasian)
{
	if($diagnostic)
	{
	echo "We have determined that your country code is Asian. Therefore you redirect to the Malaysian server...http://www.skinnutritionasia.com";
	echo "<br><a href='http://www.skinnutritionasia.com'>Test this link</a>";
	}
	else
		header('Location: http://www.skinnutritionasia.com');
	
}
else
{
	if($diagnostic)
	{
	echo "Your code is not Asian according to our database. Our server recommends you redirect to the USA server...http://www.skinnutrition.com";
	echo "<br><a href='http://www.skinnutrition.com'>Test this link</a>";
	}
}

geoip_close($gi);

?>
