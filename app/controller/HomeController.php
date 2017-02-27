<?php

/**
 * Created by PhpStorm.
 * User: tairy
 * Date: 2/27/17
 * Time: 10:37 AM
 */

namespace Fun\App\Controller;

use Fun\Kernel\Controller\BaseController;

/**
 * Class HomeController
 * @package Fun\App\Controller
 */
class HomeController extends BaseController
{
    /**
     * index
     */
    public function index()
    {
        echo "home#index";
    }
}