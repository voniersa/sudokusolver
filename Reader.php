<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 10:00
 */

namespace flyeralarm\sudokuV5;


class Reader
{
    public function read() : array
    {
        $i = 1;
        while($i < 82)
        {
            $array[$i] = $_POST[$i];
            $i++;
        }
        return $array;
    }

    public function read2() : array
    {
        $i = 1;
        while($i < 82)
        {
            if($_POST[$i] == null || '')
            {
                $array[$i] = 'x';
            } else {
                $array[$i] = 'a';
            }
            $i++;
        }
        $array['unmoeglich'] = 'nein';
        $array['finish'] = 'nein';
        return $array;
    }
}