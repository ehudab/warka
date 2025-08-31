<?php
// HTTP
define('HTTP_SERVER', getenv('HTTP_SERVER') ?: 'https://warka-s02u.onrender.com/');

define('HTTPS_SERVER', getenv('HTTP_SERVER') ?: 'https://warka-s02u.onrender.com/');

// DIR
define('DIR_APPLICATION', __DIR__ . '/catalog/');
define('DIR_SYSTEM', __DIR__ . '/system/');
define('DIR_IMAGE', __DIR__ . '/image/');
define('DIR_STORAGE', __DIR__ . '/system/storage/');
define('DIR_LANGUAGE', __DIR__ . '/catalog/language/');
define('DIR_TEMPLATE', __DIR__ . '/catalog/view/template/');
define('DIR_CONFIG', __DIR__ . '/system/config/');
define('DIR_CACHE', __DIR__ . '/system/storage/cache/');
define('DIR_DOWNLOAD', __DIR__ . '/system/storage/download/');
define('DIR_LOGS', __DIR__ . '/system/storage/logs/');
define('DIR_SESSION', __DIR__ . '/system/storage/session/');
define('DIR_UPLOAD', __DIR__ . '/system/storage/upload/');

// DB
define('DB_DRIVER', getenv('DB_DRIVER') ?: 'mysqli');
define('DB_HOSTNAME', getenv('DB_HOSTNAME') ?: 'crossover.proxy.rlwy.net');
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');
define('DB_DATABASE', getenv('DB_DATABASE') ?: 'railway');
define('DB_PORT', getenv('DB_PORT') ?: '44629');
define('DB_PREFIX', getenv('DB_PREFIX') ?: 'oc_');
