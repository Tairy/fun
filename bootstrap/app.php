<?php
/**
 * Created by PhpStorm.
 * User: tairy
 * Date: 2/27/17
 * Time: 11:24 AM
 */

require_once __DIR__ . '/../kernel/App.php';

define('__CONTROLLER_PERFIX__', 'Fun\App\Controller');

spl_autoload_register(['Fun\Kernel\App', 'autoload']);