<?
////////////////////////////////////////////////////////////////////////////
// Use this file to add new partner links on the frontpage
// Keep the width and height constant for partner images (Width should be 146px and height 77px)
// Partner images are stored in the images/partners
////////////////////////////////////////////////////////////////////////////

?>

<!-- Partner 1 - Bliss -->
<div style="position: absolute; top: 0px; left: 0px; z-index: 2;" id="Partner1">
	<a href="http://www.blissworld.com/" target="_blank">
	<img alt="bliss" src="images/partners/BlissMain.jpg" border="0" /></a>
</div>

<!-- Partner 2 - Saks -->
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner2">
	<a href="http://www.saksfifthavenue.com/" target="_blank">
	<img alt="Saks Fifth Avenue" src="images/partners/saks.jpg" border="0" /></a>
</div>

<!-- Partner 3 - Selfridges -->
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner3">
	<a href="http://www.selfridges.com/" target="_blank">
	<img alt="Selfridges" src="images/partners/selfridges.jpg" border="0" /></a>
</div> 

<!-- Partner 4 - David --> 
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner4">
	<a href="http://www.davidjones.com.au/" target="_blank">
	<img alt="David Jones" src="images/partners/davidjones.jpg" border="0" /></a>
</div>

<!-- Partner 5 - Rescu -->
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner5">
	<a href="http://www.rescu.com.au/" target="_blank">
	<img alt="RESCU" src="images/partners/rescu.jpg" border="0" /></a>
</div>
<!-- Partner 6 - emma -->            
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner6">
	<a href="http://www.emmalizs.com/" target="_blank">
	<img alt="emma lizs" src="images/partners/emmalizs.jpg" border="0" /></a>
</div>

<!-- Partner 7 - Fred -->             
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner7">
	<a href="http://www.fredsegal.com/" target="_blank">
	<img alt="Fred Segal" src="images/partners/fredsegal.jpg" border="0" /></a>
</div>

<!-- Partner 8 - Treat -->           
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner8">
	<a href="http://www.treatthyself.com/" target="_blank">
	<img alt="Treat" src="images/partners/treat.jpg" border="0" /></a>
</div>

<!-- Partner 9 - DermStore -->             
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner9">
	<a href="http://www.dermstore.com/" target="_blank">
	<img alt="DermStore" src="images/partners/derm.jpg" border="0" /></a>
</div>

<!-- Partner 10 - StudioBeauty -->              
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner10">
	<a href="http://www.studiobeautymix.com/" target="_blank">
	<img alt="StudioBeautyMix" src="images/partners/studiobeauty.jpg" border="0" /></a>
</div>  

<!-- Partner 11 - makemeheal -->              
<div style="position: absolute; top: 0px; left: 0px; display: none;" id="Partner11">
	<a href="http://www.makemeheal.com/" target="_blank">
	<img alt="makemeheal" src="images/partners/makemeheal.jpg" border="0" /></a>
</div> 

<script language="JavaScript">

// Wait 4000 milliseconds
var partnerspeed = 4000;
function StartPartnerSlideshow()
{
    if(endPartnerDiv == "Partner2")
    {
        startPartnerDiv = "Partner2";
        endPartnerDiv = "Partner3";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
    else if(endPartnerDiv == "Partner3")
    {
        startPartnerDiv = "Partner3";
        endPartnerDiv = "Partner4";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
    else if(endPartnerDiv == "Partner4")
    {
        startPartnerDiv = "Partner4";
        endPartnerDiv = "Partner5";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
    else if(endPartnerDiv == "Partner5")
    {
        startPartnerDiv = "Partner5";
        endPartnerDiv = "Partner6";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
    else if(endPartnerDiv == "Partner6")
    {
        startPartnerDiv = "Partner6";
        endPartnerDiv = "Partner7";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
    else if (endPartnerDiv == "Partner7") 
    {
        startPartnerDiv = "Partner7";
        endPartnerDiv = "Partner8";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)", partnerspeed);
    }
    else if (endPartnerDiv == "Partner8") 
    {
        startPartnerDiv = "Partner8";
        endPartnerDiv = "Partner9";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)", partnerspeed);
    }
    else if (endPartnerDiv == "Partner9") 
    {
        startPartnerDiv = "Partner9";
        endPartnerDiv = "Partner10";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)", partnerspeed);
    }
    else if (endPartnerDiv == "Partner10") 
    {
        startPartnerDiv = "Partner10";
        endPartnerDiv = "Partner11";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)", partnerspeed);
    }
    else if (endPartnerDiv == "Partner11") 
    {
        startPartnerDiv = "Partner11";
        endPartnerDiv = "Partner1";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)", partnerspeed);
    }
    else
    {
        startPartnerDiv = "Partner1";
        endPartnerDiv = "Partner2";
        setTimeout("GetNextPartner('" + startPartnerDiv + "', '" + endPartnerDiv + "', 10, 0)",partnerspeed);
    }
}
</script>