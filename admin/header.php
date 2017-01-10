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
<table border="0" width="900" style="background-color: #ffffff; margin-top: 6px; border: #5b5b5b 7px solid" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
<table border="0" width="100%" cellspacing="0" cellpadding="18">
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;&nbsp;<?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT, '', 'NONSSL') . '" class="headerLink">' . HEADER_TITLE_ADMINISTRATION . '</a> &nbsp;|&nbsp; <a href="' . tep_catalog_href_link() . '" class="headerLink">' . HEADER_TITLE_ONLINE_CATALOG . '</a>'; ?></td>
    <td class="headerBarContent" align="right"><?php echo (tep_session_is_registered('admin') ? 'Welcome back, ' . $admin['username']  . ' (<a href="' . tep_href_link(FILENAME_LOGIN, 'action=logoff') . '" class="headerLink">Logoff</a>)' : ''); ?>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT, '', 'NONSSL') . '">' . tep_image(DIR_WS_IMAGES . 'oscommerce.png', PROJECT_VERSION) . '</a>'; ?></td>
  </tr>
  <tr class="headerBar2">
    <td class="headerBarContent2" colspan=2>&nbsp;&nbsp; <? echo '<a href="' . tep_href_link(FILENAME_CUSTOMERS, '', 'NONSSL') . '" class="headerLink2">' . BOX_CUSTOMERS_CUSTOMERS . '</a>&nbsp;&nbsp;' ?><? echo '<a href="' . tep_href_link(FILENAME_ORDERS, '', 'NONSSL') . '" class="headerLink2">' . BOX_CUSTOMERS_ORDERS . '</a>' ?> </td>
  </tr>
</table>