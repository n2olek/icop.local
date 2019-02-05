<?php
define('DB_NAME', 'icop-wp-6ArlB0zd');
define('DB_USER', 'xzATRzyfjgHD');
define('DB_PASSWORD', 'OQ3OnxOgrSI1Oo1B');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '4pFZODzQuUaI0EJi3IS9nHX7ji92wt4ErIppGr1d');
define('SECURE_AUTH_KEY',  'obmvymlUS7qtyyviY18ebRCZWfiLFkxYf4NFmmkn');
define('LOGGED_IN_KEY',    'CeVqf5zlGGB6CM6b198bHIPx6t67FotPAfIDmpyF');
define('NONCE_KEY',        'U0FctLj1kDSfVEjN4zkQNOA7LA7vRBKKPeRXs6Xu');
define('AUTH_SALT',        'FnjGK5Na7M7V2XYXNntCcTdoDclFFE1miAnJAEH7');
define('SECURE_AUTH_SALT', 'EL6Kf87jr1NX4bc64cFyM0li5YCXOcauQDhmZ0YS');
define('LOGGED_IN_SALT',   'rgf5vXLrJOsVzlcUlZjIPMh96nBA1fX6EXSZNKwD');
define('NONCE_SALT',       'Lm5CenI4wa0ohuz0b92BOgqKEJmxgupWsDS3VFIj');

$table_prefix  = 'wp_c02b81d9ea_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

define('ALLOW_UNFILTERED_UPLOADS', true);