<?php
/*
  $Id: contact_us.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_ABOUT);

  $error = false;
  if (isset($HTTP_GET_VARS['action']) && ($HTTP_GET_VARS['action'] == 'send')) {
    $name = tep_db_prepare_input($HTTP_POST_VARS['name']);
    $email_address = tep_db_prepare_input($HTTP_POST_VARS['email']);
    $enquiry = tep_db_prepare_input($HTTP_POST_VARS['enquiry']);

    if (tep_validate_email($email_address)) {
      tep_mail(STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS, EMAIL_SUBJECT, $enquiry, $name, $email_address);

      tep_redirect(tep_href_link(FILENAME_CONTACT_US, 'action=success'));
    } else {
      $error = true;

      $messageStack->add('contact', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
    }
  }

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_aBOUT));
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE . ' - Nutrissentials Information'; ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
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
    <td width="<?php echo BOX_WIDTH; ?>" valign="top" ><table border="0" width="<?php echo BOX_WIDTH; ?>" cellspacing="0" cellpadding="2">
<!-- left_navigation //-->
<?php require(DIR_WS_INCLUDES . 'column_left.php'); ?>
<!-- left_navigation_eof //-->
    </table></td>
<!-- body_text //-->
    <td width="100%" valign="top"  style="padding-left: 45px; padding-top: 20px;padding-bottom:0px; padding-right:106px"><?php echo tep_draw_form('contact_us', tep_href_link(FILENAME_CONTACT_US, 'action=send')); ?><table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td>    <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td><h1>Nutrissentials</h1></td>

        </tr>
        <tr>
            <td>
                <p>Even our preservation system was developed with our `clean' and `bioactive' philosophy. The Nutrissentials range utilizes SN-NPST(Skin Nutrition Natural Preservation System), a first of its kind, proprietary patent-pending natural preservation system that is unlike the harsh chemical preservative systems that are used by so many other brands. </p>
                  <p>Skin Nutrition uses no synthetic fragrances, petrochemicals, sulfate detergents, synthetic colors, animal ingredients, parabens, glycols and diglycols (such as propylene glycol), PEG's, PPGs, urea, D.E.A, T.E.A, aliphatic alcohols/hydrocarbons, phthalates, fumarates, amines, alkanolamines, polyacrylamide, methacrylates, elastomers, poloxamer, styrene, polyquaternaries, synthetic chelating agents, nylon, nitriles, nitrates, nitrosamine releasers, bromates, aluminum and alumina.</p>
            </td>
        </tr>
        <tr>

            <td>&nbsp;</td>
        </tr>
        <tr>
            <td><h1>Ingredient Function</h1></td>
        </tr>
        <tr>
            <td>
                <p><strong>SN-NPST</strong> - (Skin Nutrition Natural Preservation System), a first of its kind, is a proprietary patent-pending 100% natural preservation system that is unlike the harsh chemical preservative systems that are used by so many other brands. The proprietary blend of natural ingredients that make up SN-NPST has additional benefits in that it provides essential phyto-nutrients to the skin.</p>

                <p><strong>Super-Berry Extracts</strong> - This proprietary blend of Blueberry, Acai Berry, Goji Berry, Raspberry, Cranberry, and Strawberry extracts, which are specifically blended and micro-encapsulated for optimal delivery and efficacy, generates a powerful super-food for skin cells! This blend provides an abundant source of some of the most potent phyto-nutrients known to man, which include active flavonoids  such as quercitin, rutin, hesperidin, and procyanidin amongst numerous others, as well as tannins, catechins and other polyphenolic actives.  These phyto-nutrients work synergistically to flush out toxins, protect cells, protect DNA, and saturate cellular components with vital nutrients, enabling them to flourish.</p>
                <p><strong>Vitamin C</strong> - A unique super-hybrid lipid soluble form, which provides optimal penetration and efficacy and is 50 times more effective than ascorbic acid (regular vitamin C), whilst not degrading like regular vitamin C. It is highly prolific at stimulating collagen production, as well as conferring clarifying and brightening effects on the skin by inhibiting and normalizing melanogenesis (the production of the melanin pigment), thereby promoting a more even skin tone. It is also a potent anti-oxidant, which protects the skin cells from environmental aggressors, thereby inhibiting the onset of free radical-induced premature ageing.</p>
                <p><strong>Fruit and Seed Oils</strong> - We use high purity Avocado, Rose Hip, Olive, Borage, and Black Current Seed oils for their bio-compatibility with skin and specifically chosen fatty acid profiles, rich GLA and polyphenol content, as well as for their ability to deeply nourish and hydrate, without leaving any unwanted residues on the surface of the skin.</p>
                <p><strong>Omega Complex</strong> - This customized blend of Omega 3, 6, and 9 has remarkable skin enhancing properties from protecting cell membranes to reducing inflammation and providing intense moisturization. It is nano-encapsulated utilizing patent-pending technology to optimally enhance delivery and efficacy, whilst preventing harmful oxidation of these precious oils.</p>

                <p><strong>Plankton Derived Omega 3</strong> - Marine derived Omega 3, which is specifically chosen for its ability to stimulate the cellular component activity of skin cells, in particular of keratinocytes, fibroblasts, and melanocytes. It is a highly bio-available moisturizer, which protects the lipid barrier against the harmful effects of UV exposure, and has multiple anti-ageing benefits.</p>
                <p><strong>Opuntia Ficus Indica (Cactus Pear) Extract</strong>  - Derived from the fruit of this unique cactus, it is utilized for its ability to sooth and calm the skin, reduce inflammation and irritation, and prevent lipid peroxidation, which is the prime cause of cellular damage.</p>
                <p><strong>Monk's Pepper Berry Extract</strong> - Otherwise known as a `neurocosmetic ` or `phyto-endorphin',  due to its ability to stimulate endorphin-like activity, this extract promotes skin `well-being' and radiance, as well as possessing the ability to stimulate fibroblast proliferation.</p>
                <p><strong>Astaxanthin</strong> - An algae, which is the most potent anti-oxidant known, has the unique ability to span through the double layer of the cell membrane, allowing it to protect skin cells more effectively than any other anti-oxidant, as it protects the cell both internally and externally.  Its additional activity includes reduction of inflammation at cellular levels, stimulation of fibroblast growth, inhibiting pigmentation, improving skin moisture levels and elasticity of the skin, and has anti- wrinkle benefits.</p>

                <p><strong>Arginine</strong> - An amino acid with properties that include improved exfoliation, increased keratolytic turnover, improved skin firming, a reduction in hyper-pigmentation and an improvement in skin cell oxygenation.</p>
                <p><strong>Carnosine</strong> - A natural dipeptide (consisting of two amino acids), which prevents and reverses glycation and has a potent effect on cell rejuvenation, through optimized anti-oxidant activity.</p>
                <p><strong>Peptides</strong> - Palmitoyl Oligopeptide and Palmitoyl Tertrapeptide-7 work synergistically to act as cellular messengers that stimulate collagen and elastin synthesis, mimicking collagen type I production and promoting skin tissue repair.</p>
                <p><strong>Hyaluronic Acid</strong> - A biotechnologically-derived ingredient obtained from plant sources, which demonstrates powerful bio-active moisturization properties, through its film forming ability to lock moisture into the skin.   This material also demonstrates impressive anti-aging and wrinkle reduction properties by helping to keep skin smooth and "plump" through its ability to hold up to 1,000 times its own weight in water.</p>

                <p><strong>Vitamin E</strong> - We use two types of vitamin E, Tocopherol (natural) and Tocopheryl Acetate (an ester) to synergistically improve antioxidant efficacy and availability. Vitamin E is an oil soluble anti-oxidant that protects cell membranes and other lipophilic components of the body, as well as preventing oxidation of other oils.</p>
                <p><strong>Vitamin A</strong> - Historically referred to as the "anti-ageing vitamin" and is still one of the most widely used actives in treatment skin care products. It is only used in the Night Cream and, when combined with other actives, demonstrates synergistic activities that include wrinkle reduction and skin cell stimulation, to providing maximum levels of antioxidant therapy during the evening restoration period.</p>
                <p><strong>Phyto Radiance Boosters</strong> - Nymphaea Alba Flower Extract and Saccharomyces /Xylinum / Black Tea Ferment are used for their powerful complexion brightening and radiance boosting properties.</p>
                <p><strong>Spinach Extract</strong> - A proprietary extraction and micro-encapsulated process was utilized to create this extract that effectively penetrates the epidermal membrane. It has superior anti-oxidant properties and delivers essential minerals such as iron, copper and magnesium to the skin cells, which are vital for new cell development. This extract is used in the Deep Cleaning and Hydrating Masks. </p>

                <p><strong>Kaolin Clay</strong> - Used only in the Deep Cleansing Mask, it detoxifies the skin, stimulates circulation, has gentle exfoliating properties, clears pores, reduces swelling and inflammation, and leaves the skin with a radiant healthy glow.</p>
                <p><strong>Beta Glucan</strong> - Provides powerful DNA and lipid barrier protection, and demonstrates highly effective anti-wrinkle effects, while promoting cellular and wound healing benefits. </p>
                <p><strong>Essential Oils</strong> - Skin Nutrition uses no chemical fragrances, we only use natural essential oils, which not only give a "natural fragrance" but also possess skin enhancing properties such as moisturization, control of sebaceous activity and skin homeostasis.</p>
            </td>

        </tr>
    </table>
</td>
          </tr>
        </table></td>
      </tr>
    </table></form></td>
<!-- body_text_eof //-->
</td>
  </tr>
</table>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->
<br>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
