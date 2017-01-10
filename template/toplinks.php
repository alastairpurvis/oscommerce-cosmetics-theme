<table cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td width="189">
			<img alt="Skin Nutrition" src="images/logo.jpg" />
		</td>
        <td width="23">
			<img src="images/pxl-trans.gif" width="23" height="1" />
		</td>
        <td width="426" valign="bottom">
			<img alt="A technological revolution in skincare" src="images/tagline.gif" />
		</td>
            <td align="right" valign="bottom">
                <table cellpadding="0" cellspacing="0">
                    <tr>
						<td style="text-align:right; height: 44px;vertical-align: center; padding-right: 40px; ">
						
						<img src="images/connectwithus.png" width="45" height="24" />
						<img src="images/pxl-trans.gif" width="8" height="1" />
						
						<a href="http://www.facebook.com/pages/Skin-Nutrition/106297286061669?ref=ts">
						<img src="images/fbicon.png" width="29" height="29" onmouseover="this.src='images/fbicon_on.png'" onmouseout="this.src='images/fbicon.png'" alt="Become a fan" title="Become a fan" /></a>
						
						<a href="http://twitter.com/SkinNutrition">
						<img src="images/twicon.png" width="29" height="29" alt="Follow us on Twitter" title="Follow us on Twitter" onmouseover="this.src='images/twicon_on.png'" onmouseout="this.src='images/twicon.png'" /></a>
						
						<a href="http://www.youtube.com/skinnutritionmedia">
						<img src="images/yticon.png" width="29" height="29" alt="Visit our channel" title="Visit our channel" onmouseover="this.src='images/yticon_on.png'" onmouseout="this.src='images/yticon.png'" />
						</a>
						
						</td>
                        <td style="text-align:right; background: url('images/madeusa.jpg') no-repeat right; height: 44px;width: 86px">&nbsp;</td>
                        </tr>
				</table>
                <table cellpadding="0" cellspacing="0" style="padding-top: 8px" valign="bottom">
                    <tr>
                        <td class="header">
						<? 
						
						///////////////////////////////////////////////////////
						// Signed in?
						//////////////////////////////////////////////////////
						if (tep_session_is_registered('customer_id')) 
						{ 
						?>
							<a href="<?php echo tep_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>" class="headerNavigation">
							<? echo HEADER_TITLE_LOGOFF; ?></a>
							
							&nbsp;|&nbsp; 
							
							<a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>" class="headerNavigation">
							<?php echo HEADER_TITLE_MY_ACCOUNT; ?></a>
							
						<? 
						}
						/////////////////////////////////////////////////
						// Not signed in?
						/////////////////////////////////////////////////
						else
						{ 
						?>
							<a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>" class="headerNavigation">
							Sign In</a>
						<? 
						} 
						/////////////////////////////////////////////////
						?> 
						
						&nbsp;|&nbsp; 
						
						<a href="<?php echo tep_href_link(FILENAME_CONTACT_US); ?>" class="headerNavigation">Contact Us</a>
						
						<? 
						/////////////////////////////////////////
						// Got items in your cart?
						////////////////////////////////////////
						if($cart->count_contents() > 0)
						{ 
						?>
							&nbsp;|&nbsp; 
							
							<a href="<?php echo tep_href_link(FILENAME_SHOPPING_CART); ?>" class="headerNavigation">
							<? $no = $cart->count_contents(); echo $no . noun($cart->count_contents(),' item','s') ?></a>
						<? 
						} 
						/////////////////////////////////////////
						?> 
						&nbsp;&nbsp;
					</td>
                </tr>
            </table>
        </td>
    </tr>
</table>