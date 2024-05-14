<?php

/**
 * BASE URL // todo chage in production
 */
define('BASE_URL', 'http://localhost/mini-project');


// constants path // !important
const linkto = BASE_URL . '/';
const assets = BASE_URL . "/assets";
const css = assets . "/css";
const js = assets . "/js";
const img = assets . "/img";


/**
 * PATHS
 */
define('PATH_LAYOUTS', __DIR__ . '/../layout');
define('PATH_TEMPLATES', __DIR__ . '/../layout/templates');
define('PATH_PAGES', __DIR__ . '/../pages');


/**
 * DATABASE // todo Change for production
 */
define('DB_HOST', 'localhost');
define('DB_NAME', 'mini-project');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');
