<?php
// HTTP
define('HTTP_SERVER', getenv('HTTP_SERVER_ADMIN') ?: 'https://warka-s02u.onrender.com/admin/');
define('HTTP_CATALOG', getenv('HTTP_SERVER') ?: 'https://warka-s02u.onrender.com/');

// HTTPS
define('HTTPS_SERVER', getenv('HTTP_SERVER_ADMIN') ?: 'https://warka-s02u.onrender.com/admin/');
define('HTTPS_CATALOG', getenv('HTTP_SERVER') ?: 'https://warka-s02u.onrender.com/');

// DIR
define('DIR_APPLICATION', __DIR__ . '/');
define('DIR_SYSTEM', dirname(__DIR__) . '/system/');
define('DIR_IMAGE', dirname(__DIR__) . '/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', dirname(__DIR__) . '/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', getenv('DB_DRIVER') ?: 'mysqli');
define('DB_HOSTNAME', getenv('DB_HOSTNAME') ?: 'crossover.proxy.rlwy.net');
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');
define('DB_DATABASE', getenv('DB_DATABASE') ?: 'railway');
define('DB_PORT', getenv('DB_PORT') ?: '44629');
define('DB_PREFIX', getenv('DB_PREFIX') ?: 'oc_');
