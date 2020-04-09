<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:59
 */

namespace flyeralarm\sudokuV5;


class RowChecker
{
    public function checkRow(int $posi, array $array, int $einzutragendeZahl) : bool
    {
        if($posi <= 9)
        {
            for($i = 1; $i < 10; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 9)
                {
                    return true;
                }
            }
        }
        if($posi >= 10 && $posi <= 18)
        {
            for($i = 10; $i < 19; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 18)
                {
                    return true;
                }
            }
        }
        if($posi >=19 && $posi <= 27)
        {
            for($i = 19; $i < 28; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 27)
                {
                    return true;
                }
            }
        }
        if($posi >= 28 && $posi <= 36)
        {
            for($i = 28; $i < 37; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 36)
                {
                    return true;
                }
            }
        }
        if($posi >= 37 && $posi <= 45)
        {
            for($i = 37; $i < 46; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 45)
                {
                    return true;
                }
            }
        }
        if($posi >= 46 && $posi <= 54)
        {
            for($i = 46; $i < 55; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 54)
                {
                    return true;
                }
            }
        }
        if($posi >= 55 && $posi <= 63)
        {
            for($i = 55; $i < 64; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 63)
                {
                    return true;
                }
            }
        }
        if($posi >= 64 && $posi <= 72)
        {
            for($i = 64; $i < 73; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 72)
                {
                    return true;
                }
            }
        }
        if($posi >= 73)
        {
            for($i = 73; $i < 82; $i++)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 81)
                {
                    return true;
                }
            }
        }
    }
}