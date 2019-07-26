<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:39
 */

namespace flyeralarm\sudokuV5;


class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        if(array_key_exists('REQUEST_URI', $_SERVER))
        {
            $uri = $_SERVER['REQUEST_URI'];
        } else {
            $uri = '';
        }
        echo $this->router->getPageFromUrl($uri)->run();
    }
}