<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 29.10.18
 * Time: 09:11
 */

namespace flyeralarm\sudokuV5;

require_once __DIR__ .'/vendor/autoload.php';

$factory = new Factory();
$app = $factory->createApplication();
$app->run();