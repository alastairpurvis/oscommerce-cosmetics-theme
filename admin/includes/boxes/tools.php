<?php
/*
  $Id: tools.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
?>
<!-- tools //-->
          <tr>
            <td>
<?php
  $heading = array();
  $contents = array();

  $heading[] = array('text'  => BOX_HEADING_TOOLS,
                     'link'  => tep_href_link(FILENAME_NEWSLETTERS, 'selected_box=tools'));

  if ($selected_box == 'tools') {
    $contents[] = array('text'  => '<a href="' . tep_href_link(FILENAME_MAIL) . '" class="menuBoxContentLink">' . BOX_TOOLS_MAIL . '</a><br>' .
                                   '<a href="' . tep_href_link(FILENAME_NEWSLETTERS) . '" class="menuBoxContentLink">' . BOX_TOOLS_NEWSLETTER_MANAGER . '</a><br>' .
                                   '<a href="' . tep_href_link(FILENAME_WHOS_ONLINE) . '" class="menuBoxContentLink">' . BOX_TOOLS_WHOS_ONLINE . '</a>');
  }

  $box = new box;
  echo $box->menuBox($heading, $contents);
?>
            </td>
          </tr>
<!-- tools_eof //-->
