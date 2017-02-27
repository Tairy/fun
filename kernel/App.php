<?php

/**
 * Created by PhpStorm.
 * User: tairy
 * Date: 2/22/17
 * Time: 6:36 PM
 */
namespace Fun\Kernel;

/**
 * Class App
 * @package Fun\Kernel
 */
class App
{
    /**
     * run
     */
    public static function run()
    {
        $request = new Request();
        self::route($request);
    }

    /**
     * route
     * @param Request $request
     */
    public static function route(Request $request)
    {
        if (file_exists(APP_PATH . '/fun/config/router.php')) {
            $routers = require_once APP_PATH . '/fun/config/router.php';
            if (key_exists($request->getUri(), $routers)) {
                $target = $routers[$request->getUri()];
                $targetArray = explode('@', $target);
                $controller = __CONTROLLER_PERFIX__ . '\\' . $targetArray[0];
                $controllerInstance = new $controller();
                $controllerInstance->{$targetArray[1]}();
            } else {
                echo "404";
            }
        } else {
            echo "Router file not found";
        }
    }

    /**
     * autoload
     * @param $class
     */
    public static function autoload($class)
    {
        $classes = explode('\\', $class);
        $className = array_pop($classes) . '.php';
        $prePath = strtolower(implode('/', $classes));
        $path = APP_PATH . '/' . $prePath . '/' . $className;
        require_once $path;
    }
}