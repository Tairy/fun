<?php

defined('APP_PARH') or define('APP_PATH', dirname(__DIR__));
define('APP_DEBUG', true);

require_once __DIR__ . '/config/app.php';

use Fun\Kernel\App;

App::run();