<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:39
 */

namespace flyeralarm\sudokuV5;

class Factory
{
    public function createApplication() : Application
    {
        return new Application(
            new Router(
                new StartPage(
                    new StartProjector(),
                    new Reader(),
                    new RowChecker(),
                    new ColumnChecker(),
                    new BoxChecker()
                )
            )
        );
    }
}