<?php
/*
  $Id: header.php 1785 2008-01-10 15:07:07Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2008 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size > 0) {
    echo $messageStack->output();
  }
?>
<div style="background-color: #f2f2f2;-moz-box-shadow: 1px 1px 18px #b9b9b9;-webkit-box-shadow: 1px 1px 18px #b9b9b9;box-shadow: 1px 1px 18px #b9b9b9; padding: 16px"><table width=100% cellpadding=0 cellspacing=0 border=0><tr><td width=1%><div style="height: 28px; vertical-align: middle; padding:10px; font-size: 2px; font-color: 000000">&nbsp;</td><td valign=center width=79%><div style="height: 28px;  padding-bottom:16px;font-size: 18px; font-family: Arial; color: #8d8d8d"><img src="images/llogo.jpg"/></td><td align=right width=20%>
<div id="wpcontent"><div style="vertical-align: middle; height: 18px; padding:15px; font-size: 12px; font-color: 000000"><?php echo (tep_session_is_registered('admin') ? 'Howdy, ' . $admin['username']  . ' | <a style="font-size: 12px; " href="' . tep_href_link(FILENAME_LOGIN, 'action=logoff') . '">Log out</a>' : ''); ?>&nbsp;&nbsp;</div></td>
  </tr>
</table></div><br>