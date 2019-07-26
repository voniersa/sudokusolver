<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:42
 */

namespace flyeralarm\sudokuV5;

class Router
{
    private $startPage;

    public function __construct(StartPage $startPage)
    {
        $this->startPage = $startPage;
    }

    public function getPageFromUrl(String $url)
    {
        switch($url)
        {
            case '/':
                return $this->startPage;
        }
        return "Fehler";
    }
}