<?php
/*
  $Id: header.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// check if the 'install' directory exists, and warn of its existence
  if (WARN_INSTALL_EXISTENCE == 'true') {
    if (file_exists(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install')) {
      $messageStack->add('header', WARNING_INSTALL_DIRECTORY_EXISTS, 'warning');
    }
  }

// check if the configure.php file is writeable
  if (WARN_CONFIG_WRITEABLE == 'true') {
    if ( (file_exists(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php')) && (is_writeable(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php')) ) {
      $messageStack->add('header', WARNING_CONFIG_FILE_WRITEABLE, 'warning');
    }
  }

// check if the session folder is writeable
  if (WARN_SESSION_DIRECTORY_NOT_WRITEABLE == 'true') {
    if (STORE_SESSIONS == '') {
      if (!is_dir(tep_session_save_path())) {
        $messageStack->add('header', WARNING_SESSION_DIRECTORY_NON_EXISTENT, 'warning');
      } elseif (!is_writeable(tep_session_save_path())) {
        $messageStack->add('header', WARNING_SESSION_DIRECTORY_NOT_WRITEABLE, 'warning');
      }
    }
  }

// check session.auto_start is disabled
  if ( (function_exists('ini_get')) && (WARN_SESSION_AUTO_START == 'true') ) {
    if (ini_get('session.auto_start') == '1') {
      $messageStack->add('header', WARNING_SESSION_AUTO_START, 'warning');
    }
  }

  if ( (WARN_DOWNLOAD_DIRECTORY_NOT_READABLE == 'true') && (DOWNLOAD_ENABLED == 'true') ) {
    if (!is_dir(DIR_FS_DOWNLOAD)) {
      $messageStack->add('header', WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT, 'warning');
    }
  }

  if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
  }

?>
<div id="mainDiv">
<div id="mainTable">
    <table cellspacing="0" cellpadding="0" width="1004" align="center">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEwMDUyNjYzMjgPZBYCZg9kFgICAQ9kFg5mD2QWAgIDDw9kFgQeB29uZm9jdXMFMmlmKHRoaXMudmFsdWU9PSdTZWFyY2ggdGhpcyBzaXRlJyl7dGhpcy52YWx1ZT0nJzt9HgZvbmJsdXIFMmlmKHRoaXMudmFsdWU9PScnKXt0aGlzLnZhbHVlPSdTZWFyY2ggdGhpcyBzaXRlJzt9ZAIBDxYCHgtfIUl0ZW1Db3VudAIIFhBmD2QWAmYPFQIBMRxDb21wbGV4aW9uIEJyaWdodGVuaW5nIFNlcnVtZAIBD2QWAmYPFQIBNRdEeW5hbWljIFdyaW5rbGUgUmVkdWNlcmQCAg9kFgJmDxUCATYeRW52aXJvbm1lbnRhbCBQcm90ZWN0aW9uIFNlcnVtZAIDD2QWAmYPFQIBNxhFeWUgUmVjb25kaXRpb25pbmcgU2VydW1kAgQPZBYCZg8VAgE4EkZhY2UgTGlmdGluZyBTZXJ1bWQCBQ9kFgJmDxUCATkdRmFjaWFsIFJlc3VyZmFjaW5nIEV4Zm9saWF0b3JkAgYPZBYCZg8VAgIxMQtMaXAgUGx1bXBlcmQCBw9kFgJmDxUCAjEwHFByb3RlY3RpdmUgRGFpbHkgTW9pc3R1cml6ZXJkAgIPFgIfAgIJFhJmD2QWAmYPFQICMjgNQ2xlYW5zaW5nIEdlbGQCAQ9kFgJmDxUCAjM5EENsZWFuc2luZyBMb3Rpb25kAgIPZBYCZg8VAgI0MB1Db21wbGV4aW9uIFJldml0YWxpemluZyBTZXJ1bWQCAw9kFgJmDxUCAjQxE0RlZXAgQ2xlYW5zaW5nIE1hc2tkAgQPZBYCZg8VAgI0MwhFeWUgQ2FyZWQCBQ9kFgJmDxUCAjQyDkh5ZHJhdGluZyBNYXNrZAIGD2QWAmYPFQICMjYLTW9pc3R1cml6ZXJkAgcPZBYCZg8VAgIyNwtOaWdodCBDcmVhbWQCCA9kFgJmDxUCAjM4DFRvbmVyIFNwcml0emQCAw8WAh8CAgcWDmYPZBYCZg8VAgIxNhdCb2R5IFJlanV2ZW5hdGlvbiBDcmVhbWQCAQ9kFgJmDxUCAjE1D0JvZHkgVGVuc29yIEdlbGQCAg9kFgJmDxUCAjEzE0NlbGx1bGl0ZSBUcmVhdG1lbnRkAgMPZBYCZg8VAgIxNBxNYXJpbmUgRGV0b3hpZnlpbmcgQm9keSBNYXNrZAIED2QWAmYPFQICMTIeU2VsZiBIZWF0aW5nIFRoZXJtYWwgQm9keSBNYXNrZAIFD2QWAmYPFQICMTcXVGhlcmFwZXV0aWMgTWFzc2FnZSBPaWxkAgYPZBYCZg8VAgEyG1ZvbGNhbmljIFJvY2sgQm9keSBTbW9vdGhlcmQCBA8WAh8CAgcWDmYPZBYCZg8VAgIzNgtBc3RheGFudGhpbmQCAQ9kFgJmDxUCATMRQWxwaGEgTGlwb2ljIEFjaWRkAgIPZBYCZg8VAgIxOQRETUFFZAIDD2QWAmYPFQICMTgPVml0YW1pbiBDIEVzdGVyZAIED2QWAmYPFQICMjQWQm9keSBCZWF1dGlmdWwgQ29tcGxleGQCBQ9kFgJmDxUCAjM0EE9tZWdhIDMgQ2Fwc3VsZXNkAgYPZBYCZg8VAgIyMg1PbWVnYSAzIFNoYWtlZAIFDxYCHwICCBYQZg9kFgJmDxUCATEEQWNuZWQCAQ9kFgJmDxUCATYaQW50aS1Xcmlua2xlIC8gQW50aS1BZ2VpbmdkAgIPZBYCZg8VAgE4DENlbGwgUmVuZXdhbGQCAw9kFgJmDxUCATcORE5BIFByb3RlY3Rpb25kAgQPZBYCZg8VAgE0CUdseWNhdGlvbmQCBQ9kFgJmDxUCATIeSHlwZXJwaWdtZW50YXRpb24gLyBTdW4gRGFtYWdlZAIGD2QWAmYPFQIBNRFMaWZ0aW5nICYgRmlybWluZ2QCBw9kFgJmDxUCATMWV2hpdGVuaW5nIC8gTGlnaHRlbmluZ2QCBw8WAh8CAgQWCGYPZBYCZg8VAgI4NkFMb3MgQW5nZWxlcywgTWFyY2ggMiwgMjAwOSAtIFNraW4gTnV0cml0aW9uIGhhcyBqdXN0IGNvbXBsZXRlZC4uLmQCAQ9kFgJmDxUCAjg3QkxvcyBBbmdlbGVzLCBNYXJjaCAyLCAyMDA5IOKAkyBFdmVyeSBkZWNhZGUgb3Igc28gc29tZXRoaW5nIG5ldy4uLmQCAg9kFgJmDxUCAjg4Q051dHJpc3NlbnRpYWxzIHVwZGF0ZXMgcHJldmlvdXMgRXNzZW50aWFsIEFudGkgT3hpZGFudCBsaW5lIHdpdGguLi5kAgMPZBYCZg8VAgI4OT9Mb3MgQW5nZWxlc+KAlEJyZWFraW5nIG5ldyBncm91bmQgaW4gdGhlIHJlYWxtIG9mIHNjaWVudGlmaWMuLi5kGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYBBSFjdGwwMCRTZWFyY2hDb250cm9sMSRTZWFyY2hCdXR0b24E/srfx1d8fnohgJKY+2v7XawS9g==" />
</div>
<div class="image01"></div><div class="image02"></div><div class="image03"></div><div class="image04"></div><div class="image05"></div><div class="image06"></div>
<div class="image07"></div><div class="image08"></div><div class="image09"></div><div class="image10"></div><div class="image11"></div><div class="image12"></div><div class="image13"></div><div class="image14"></div><div class="image15"></div><div class="subnav1"></div><div class="subnav2"></div><div class="subnav3"></div><div class="subnav4"></div><div class="subnav5"></div>
<div>

  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAwLngM/7AwL2od0eAtnb8p0PryzoFELHjeb+GSTTIy6JGq8BG4g=" />
</div>
        <tr>
            <td style="padding: 0px 19px 0px 14px;">
            <table cellspacing="0" cellpadding="0" width="100%">

                <tr>
                    <td><img src="images/pxl-trans.gif" width="1" height="69" /></td>
                </tr>
                <tr>
                    <td style="padding-left: 17px;">
                   <? require(DIR_WS_INCLUDES.'../template/toplinks.php');?>
                    </td>
                </tr>
                <tr>

                    <td><img src="images/pxl-trans.gif" width="1" height="29" /></td>
                </tr>
                <tr>
                    <td>
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td><a href="<? ECHO tep_href_link(FILENAME_DEFAULT) ?>"><div style="width:130px; height:46px; background-image: url('images/nav/01.gif')" onmouseover="this.style.backgroundPosition = '0 -46px';" onmouseout="this.style.backgroundPosition = '0 0';" /></div></a></td>
                            <td><?if($menupage != 'about'){ ?><a href="<? ECHO tep_href_link(FILENAME_ABOUT); ?>"><? }?><div style="width:130px; height:46px; background-position: -130px <?if($menupage == 'about')echo '-92px'; else echo '0'?>; background-image: url('images/nav/01.gif')" <?if($menupage != 'about'){ ?>.jpg" onmouseover="this.style.backgroundPosition = '-130px -46px';" onmouseout="this.style.backgroundPosition = '-130px 0';" <? } ?>></div><?if($menupage != 'about') echo '</a>' ?></td>
                            <td><?if($menupage != 'ranges'){ ?><a href="<? ECHO tep_href_link(FILENAME_RANGES); ?>"><? }?><div style="width:130px; height:46px; background-position: -260px <?if($menupage == 'ranges')echo '-92px'; else echo '0'?>; background-image: url('images/nav/01.gif')" <?if($menupage != 'ranges'){ ?>.jpg" onmouseover="this.style.backgroundPosition = '-260px -46px';" onmouseout="this.style.backgroundPosition = '-260px 0';" <? } ?>></div><?if($menupage != 'ranges') echo '</a>' ?></td>
                            <td><?if($menupage != 'products'){ ?><a href="<?  $cPath_new = 'cPath=22'; ECHO tep_href_link(FILENAME_DEFAULT, $cPath_new) ?>"><? }?><div style="width:130px; height:46px; background-position: -390px <?if($menupage == 'products')echo '-92px'; else echo '0'?>; background-image: url('images/nav/01.gif')" <?if($menupage != 'products'){ ?>.jpg" onmouseover="this.style.backgroundPosition = '-390px -46px';" onmouseout="this.style.backgroundPosition = '-390px 0';" <? } ?>></div><?if($menupage != 'products') echo '</a>' ?></td>
                            <td><a href="<? ECHO tep_href_link(FILENAME_NEWS); ?>"><?if($menupage != 'news'){ ?><? }?><div style="width:130px; height:46px; background-position: -520px <?if($menupage == 'news')echo '-92px'; else echo '0'?>; background-image: url('images/nav/01.gif')" <?if($menupage != 'news'){ ?>.jpg" onmouseover="this.style.backgroundPosition = '-520px -46px';" onmouseout="this.style.backgroundPosition = '-520px 0';" <? } ?>></div></a></td>
                            <td><?if($menupage != 'lifestyle'){ ?><a href="<? ECHO tep_href_link(FILENAME_LIFESTYLE); ?>"><? }?><div style="width:130px; height:46px; background-position: -650px <?if($menupage == 'lifestyle')echo '-92px'; else echo '0'?>; background-image: url('images/nav/01.gif')" <?if($menupage != 'lifestyle'){ ?>.jpg" onmouseover="this.style.backgroundPosition = '-650px -46px';" onmouseout="this.style.backgroundPosition = '-650px 0';" <? } ?>></div><?if($menupage != 'lifestyle') echo '</a>' ?></td>
                            <td align="center" style="width:192px; height:46px; background-position: -780px 0; background-image: url('images/nav/01.gif');">

<table cellpadding="0" cellspacing="0">
    <tr>
        <?php echo tep_draw_form('quick_find', tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get'); ?>
        <td><input type="image" name="search" id="search" src="images/buttons/search.jpg" style="border-width:0px;" /></td>
        <td><input name="keywords" type="text" value="Search products" id="keywords" class="SearchBox" onmouseover="this.style.backgroundColor =  '#ffffff'; this.style.borderColor = '#bbbbbb';" onmouseOUT="this.style.backgroundColor =  '#dddddd'; this.style.borderColor = '#cccccc';" onfocus="if(this.value=='Search products'){this.value='';}" onblur="if(this.value==''){this.value='Search products';}" /><input type="hidden" name="sid" value="c8m62teis6m7g62v4u1c9e2bn2"></td>
        </form>
    </tr>

</table>
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td><img src="images/nav/menu_shadow.jpg" /></td>
                </tr>

                <tr>
                    <td><img src="images/pxl-trans.gif" width="1" height="6" /></td>
                </tr>
                <tr>
                    <td>

<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerError">
    <td class="headerError"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?></td>
  </tr>
</table>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerInfo">
    <td class="headerInfo"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?></td>
  </tr>
</table>
<?php
  }
?>
