<?php
/*
  $Id: column_left.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

$superadmin = 'Aurelius';


  require(DIR_WS_BOXES . 'customers.php');
if($admin['username'] == $superadmin)
  require(DIR_WS_BOXES . 'configuration.php');
 if($admin['username'] == $superadmin)
  require(DIR_WS_BOXES . 'catalog.php');
   if($admin['username'] == $superadmin)
  require(DIR_WS_BOXES . 'modules.php');
   if($admin['username'] == $superadmin)
  require(DIR_WS_BOXES . 'taxes.php');
   if($admin['username'] == $superadmin)
  require(DIR_WS_BOXES . 'reports.php');
  require(DIR_WS_BOXES . 'tools.php');
?>
