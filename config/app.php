<?php
/**
 * Created by PhpStorm.
 * User: tairy
 * Date: 2/22/17
 * Time: 6:29 PM
 * @description App 配置文件
 */

require_once __DIR__ . '/../kernel/App.php';

define('__CONTROLLER_PERFIX__', 'Fun\App\Controller');

spl_autoload_register(['Fun\Kernel\App', 'autoload']);