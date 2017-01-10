<?php
/*
  $Id: shipping.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_SSOLUTIONS);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_SSOLUTIONS));
  
  $page = 'SKINSOLUTIONS';
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE . ' - Skin Solutions'; ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">
<link rel="stylesheet" type="text/css" href="stylesheet2.css">
<? include ('includes/headertags.php'); ?>
<script language="javascript" type="text/javascript" src="scripts/general.js"></script>
</head>
<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td width="<?php echo BOX_WIDTH; ?>" valign="top"><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
<!-- left_navigation //-->
<?php require(DIR_WS_INCLUDES . 'column_left.php'); ?>
<!-- left_navigation_eof //-->
    </table></td>
<!-- body_text //-->
        <td valign="top" width="581" style="padding: 23px 50px 30px 50px;">
        
        <?
        if (strtolower($_GET["page"]) == 'antiwrinkle')
        { 
                        $lspage = 2;
        ?>
                        <h1>Anti-Wrinkle / Anti-Ageing</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        Cleanse and tone gently, then massage in the Cell-CPR.  Follow with the Face Lifting Serum, and/or the Dynamic Wrinkle Reducer, then Protective Daily Moisturizer and Eye Reconditioning Serum. Repeat at night but replace the Protective Daily Moisturizer with Night Cream and massage in the Hydrating Mask over all other products. Use the Facial Resurfacing Exfoliator twice a week as directed on the label. Take the nutritional supplements as directed on the labels. These products are serums and are light weight so will not make your skin feel &#8220;product heavy&#8221; 
        <?
        }
        elseif(strtolower($_GET["page"]) == 'hyperpigmentation')
        {
                        $lspage = 6;
        ?>
                        <h1>Hyperpigmentation / Sun Damage</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        Cleanse and tone thoroughly, then apply Complexion Brightening Serum or the Complexion Revitalizing Serum, follow with Environmental Protection Serum, then with Protective Daily Moisturizer or the Moisturizer and Eye Reconditioning Serum or Eye Care. Repeat at night but replace the Protective Daily Moisturizer with Night Cream. Use the Facial Resurfacing Exfoliator twice a week as directed on the label. Take the nutritional supplements as directed on the labels. <?
        }
        elseif(strtolower($_GET["page"]) == 'liftingfirming')
        {
                        $lspage = 7;
        ?>
                        <h1>Lifting & Firming</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        Cleanse and tone thoroughly, then massage in the Cell-CPR, Face Lifting Serum, and follow with Protective Daily Moisturizer and Eye Reconditioning Serum. Repeat at night but replace the Protective Daily Moisturizer with Night Cream. For added hydration, use the Hydrating Mask after applying the Night Cream. Use the Facial Resurfacing Exfoliator twice a week as directed on the label. Take the nutritional supplements as directed on the labels. <?
        }
        elseif(strtolower($_GET["page"]) == 'lightening')
        {
                        $lspage = 8;
        ?>
                        <h1>Whitening / Lightening</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        Cleanse and tone thoroughly, then apply Complexion Brightening Serum followed by the Complexion Revitalizing Serum, and then Protective Daily Moisturizer and Eye Reconditioning Serum. Repeat at night but replace the Protective Daily Moisturizer with Night Cream. Use the Exfoliator twice a week as directed on the label. Take the nutritional supplements as directed on the labels. <?
        }
        elseif(strtolower($_GET["page"]) == 'morningafter')
        {
                        $lspage = 9;
        ?>
                        <h1>Morning After &#8211; Pick-Me-Up</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        Cleanse and tone thoroughly.  Massage the Cell-CPR followed by the Complexion Revitalizing Serum into the skin and apply the Eye Reconditioning Serum. Take 2 Body Beautiful Complex with water on an empty stomach.
                          <?
        }
        else
        {
                        $lspage = 1;
        ?>
                      <h1>Acne</h1>                        <p>
                        <b>Recommendations</b>
                               <BR>
                        &#8232;Cleanse and tone the skin gently, twice daily. Apply a small amount of Moisturizer to the skin morning and evening and ensure that the Facial Resurfacing Exfoliator and Deep Cleansing Mask are used twice weekly as directed on the label. 
                        &#8232; <?
        }
        ?>
                </p>
                <?
        
                                   function createProducts ($ls)
                                    {
                                        global $languages_id;
                                        // We are asked to show only a specific category
                            $product_info_query = tep_db_query("select  p.products_id, p.products_image, p.products_model, pd.products_name, p2c.categories_id, p.products_status, pd.language_id from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c where p.products_status = '1' and p.products_id = p2c.products_id and pd.products_id = p2c.products_id and LOWER(p.products_model) REGEXP '".$ls."' and pd.language_id = '" . (int)$languages_id . "' order by pd.products_name");
                            //$product_info = tep_db_fetch_array($product_info_query);
                           while ($product_info = tep_db_fetch_array($product_info_query))
                           {
                       $products[$product_info['products_id']] = array('name' => $product_info['products_name'],
                                                                       'id' => $product_info['products_id'],
                                                                       'image' => $product_info['products_image']);
                                        }
                                       $i = 0;
                                       echo '<Table width="100%" cellpadding="0" cellspacing="0"><tr>';
                                       foreach($products as $id => $value){
                                       if($i == 3)
                                       {
                                        $i = 0;
                                        echo '</tr><tr>';
                                       }
                                       ?>
                                          <Td style="padding-bottom:13px" valign=top align=center><table cellpadding="2" cellspacing="0" valign=top><tr><td align=center><a href="<? echo tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $products[$id]['id']); ?>"><? echo tep_image(DIR_WS_IMAGES . $products[$id]['image'], $products['products_name'], PRODUCT_IMAGE_WIDTH, PRODUCT_IMAGE_WIDTH);?></a></td><tr><td valign=top style="padding-top:10px;"><a href="<? echo tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $products[$id]['id']); ?>" class="inactive"><? echo $products[$id]['name'];?></a></td></tr></table></td>
                                        <?
                                                                               $i++;
}}
                        $ls = $HTTP_GET_VARS['page'];
                        if(!$HTTP_GET_VARS['page'])
                        {
                               $ls = 'acne';  
                        }
                        createProducts ($ls);
?>
        </tr>
        </table>
        </td>
        </td>
        <td valign="top" width="192" style="border-left: 1px solid #e8e9ea;">
        <table cellpadding="0" cellspacing="0" width="192" align="right">
            <tr>
                <td width="10"><img src="images/pxl-trans.gif" width="10" height="1" /></td>
                <td>
                <table cellpadding="0" cellspacing="0" width="182">
          <tr>
                        <td height="25" style="border-bottom: 1px solid #5fa9ca; padding-left: 5px;" class="header" valign="top"><strong>SELECT AN OPTION</strong></td>

                    </tr>
                    <tr>
                        <td><img src="images/pxl-trans.gif" width="1" height="6" /></td>
                    </tr>
                    <tr>
                 <td class="rightNav" style="padding-left: 5px;">
                 <?if(strpos(tep_href_link(FILENAME_LIFESTYLE), '?') !== false) $operator = '&'; else $operator = '?'; ?>
                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=acne" id="Right_1" class="<? if ($lspage == 1){ echo 'active';}else {echo 'inactive';}?>">Acne</a><br />

                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=antiwrinkle" id="Right_2" class="<? if ($lspage == 2){ echo 'active';}else {echo 'inactive';}?>">Anti-Wrinkle / Anti-Ageing</a><br />
                
                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=hyperpigmentation" id="Right_6" class="<? if ($lspage == 6){ echo 'active';}else {echo 'inactive';}?>">Hyperpigmentation / Sun Damage</a><br />
                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=liftingfirming" id="Right_7" class="<? if ($lspage == 7){ echo 'active';}else {echo 'inactive';}?>">Lifting & Firming</a><br />
                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=morningafter" id="Right_9" class="<? if ($lspage == 9){ echo 'active';}else {echo 'inactive';}?>">Morning After &#8211; Pick-Me-Up</a><br />
                        <a href="<? ECHO tep_href_link(FILENAME_SSOLUTIONS) . $operator ?>page=lightening" id="Right_8" class="<? if ($lspage == 8){ echo 'active';}else {echo 'inactive';}?>">Whitening / Lightening</a><br />
                        </td>

                    </tr>
                </table>

                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</div>




</table>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php');  ?>