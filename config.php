<?php

//define ROOT_PATH
define('ROOT', __DIR__);

//Load env
require_once ROOT . '/includes/libs/DotEnv.php';
(new DotEnv(ROOT.'/.env'))->load();

define('ROOT_URL', 'http://' . $_SERVER['HTTP_HOST'] . getenv('APP_ROOT'));

//defines
require_once ROOT . '/config/defines.php';

//debug
if (getenv('APP_DEBUG') == 'true') {
    require_once ROOT . '/config/debug.php';
}

//load functions
require_once ROOT . '/functions/global.inc.php';

//load security
require_once ROOT . '/config/security.php';