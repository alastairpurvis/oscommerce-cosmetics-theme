<?php
/*
  $Id: login.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');
  require('includes/functions/password_funcs.php');

  $action = (isset($HTTP_GET_VARS['action']) ? $HTTP_GET_VARS['action'] : '');

  if (tep_not_null($action)) {
    switch ($action) {
      case 'process':
        $username = tep_db_prepare_input($HTTP_POST_VARS['username']);
        $password = tep_db_prepare_input($HTTP_POST_VARS['password']);

        $check_query = tep_db_query("select id, user_name, user_password from " . TABLE_ADMINISTRATORS . " where user_name = '" . tep_db_input($username) . "'");

        if (tep_db_num_rows($check_query) == 1) {
          $check = tep_db_fetch_array($check_query);

          if (tep_validate_password($password, $check['user_password'])) {
            tep_session_register('admin');

            $admin = array('id' => $check['id'],
                           'username' => $check['user_name']);

            if (tep_session_is_registered('redirect_origin')) {
              $page = $redirect_origin['page'];
              $get_string = '';

              if (function_exists('http_build_query')) {
                $get_string = http_build_query($redirect_origin['get']);
              }

              tep_session_unregister('redirect_origin');

              tep_redirect(tep_href_link($page, $get_string));
            } else {
              tep_redirect(tep_href_link(FILENAME_ORDERS));
            }
          }
        }

        $messageStack->add(ERROR_INVALID_ADMINISTRATOR, 'error');

        break;

      case 'logoff':
        tep_session_unregister('selected_box');
        tep_session_unregister('admin');
        tep_redirect(tep_href_link(FILENAME_ORDERS));

        break;

      case 'create':
        $check_query = tep_db_query("select id from " . TABLE_ADMINISTRATORS . " limit 1");

        if (tep_db_num_rows($check_query) == 0) {
          $username = tep_db_prepare_input($HTTP_POST_VARS['username']);
          $password = tep_db_prepare_input($HTTP_POST_VARS['password']);

          tep_db_query('insert into ' . TABLE_ADMINISTRATORS . ' (user_name, user_password) values ("' . $username . '", "' . tep_encrypt_password($password) . '")');
        }

        tep_redirect(tep_href_link(FILENAME_LOGIN));

        break;
    }
  }

  $languages = tep_get_languages();
  $languages_array = array();
  $languages_selected = DEFAULT_LANGUAGE;
  for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
    $languages_array[] = array('id' => $languages[$i]['code'],
                               'text' => $languages[$i]['name']);
    if ($languages[$i]['directory'] == $language) {
      $languages_selected = $languages[$i]['code'];
    }
  }

  $admins_check_query = tep_db_query("select id from " . TABLE_ADMINISTRATORS . " limit 1");
  if (tep_db_num_rows($admins_check_query) < 1) {
    $messageStack->add(TEXT_CREATE_FIRST_ADMINISTRATOR, 'warning');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<meta name="robots" content="noindex,nofollow">
<title><?php echo TITLE; ?></title>
<link rel="stylesheet" type="text/css" href="login.css" media='all' />
<script language="javascript" src="includes/general.js"></script>
</head>
<body class="login"> 

<!-- body //-->

<div id="login"><h1><a title="Skin Nutrition Admin">Skin Nutrition Admin Panel</a></h1> 
 
<form name="login" action="login.php?action=process" method="post"> 
	<p> 
		<label>Username<br /> 
		<input type="text" name="username" id="user_login" class="input" value="" size="20" tabindex="10" /></label> 
	</p> 
	<p> 
		<label>Password<br /> 
		<input type="password" name="password" id="user_pass" class="input" value="" size="20" tabindex="20" /></label> 
	</p> 
	<p class="submit"> 
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" /> 
	</p> 
</form> 
</div> 


    </td>
  </tr>
</table>
<!-- body_eof //-->

</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>