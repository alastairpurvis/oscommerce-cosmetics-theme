<?php
  define('HTTP_SERVER', 'http://www.skinnutrition.com');
  define('HTTPS_SERVER', 'https://www.skinnutrition.com');
  define('ENABLE_SSL', true);
  define('HTTP_COOKIE_DOMAIN', 'www.skinnutrition.com');
  define('HTTPS_COOKIE_DOMAIN', 'www.skinnutrition.com');
  define('HTTP_COOKIE_PATH', '/');
  define('HTTPS_COOKIE_PATH', '/');
  define('DIR_WS_HTTP_CATALOG', '/');
  define('DIR_WS_HTTPS_CATALOG', '/');
  define('DIR_WS_IMAGES', $ncnf. 'images/');
  define('DIR_WS_ICONS', $ncnf. DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES', $ncnf. 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', $ncnf. 'pub/');
  define('DIR_FS_CATALOG', '/home/skinnu5/public_html/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'skinnu5_shoppin');
  define('DB_SERVER_PASSWORD', 'rXc432');
  define('DB_DATABASE', 'skinnu5_Mainsite');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>