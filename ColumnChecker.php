<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:59
 */

namespace flyeralarm\sudokuV5;


class ColumnChecker
{
    public function checkColumn(int $posi, array $array, int $einzutragendeZahl) : bool
    {
        if($posi == 1 || $posi == 10 || $posi == 19 || $posi == 28 || $posi == 37 || $posi == 46 || $posi == 55 || $posi == 64 || $posi == 73)
        {
            $i = 1;
            while($i <= 73)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 73)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 2 || $posi == 11 || $posi == 20 || $posi == 29 || $posi == 38 || $posi == 47 || $posi == 56 || $posi == 65 || $posi == 74)
        {
            $i = 2;
            while($i <= 74)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 74)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 3 || $posi == 12 || $posi == 21 || $posi == 30 || $posi == 39 || $posi == 48 || $posi == 57 || $posi == 66 || $posi == 75)
        {
            $i = 3;
            while($i <= 75)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 75)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 4 || $posi == 13 || $posi == 22 || $posi == 31 || $posi == 40 || $posi == 49 || $posi == 58 || $posi == 67 || $posi == 76)
        {
            $i = 4;
            while($i <= 76)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 76)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 5 || $posi == 14 || $posi == 23 || $posi == 32 || $posi == 41 || $posi == 50 || $posi == 59 || $posi == 68 || $posi == 77)
        {
            $i = 5;
            while($i <= 77)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 77)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 6 || $posi == 15 || $posi == 24 || $posi == 33 || $posi == 42 || $posi == 51 || $posi == 60 || $posi == 69 || $posi == 78)
        {
            $i = 6;
            while($i <= 78)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 78)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 7 || $posi == 16 || $posi == 25 || $posi == 34 || $posi == 43 || $posi == 52 || $posi == 61 || $posi == 70 || $posi == 79)
        {
            $i = 7;
            while($i <= 79)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 79)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 8 || $posi == 17 || $posi == 26 || $posi == 35 || $posi == 44 || $posi == 53 || $posi == 62 || $posi == 71 || $posi == 80)
        {
            $i = 8;
            while($i <= 80)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 80)
                {
                    return true;
                }
                $i += 9;
            }
        }
        if($posi == 9 || $posi == 18 || $posi == 27 || $posi == 36 || $posi == 45 || $posi == 54 || $posi == 63 || $posi == 72 || $posi == 81)
        {
            $i = 9;
            while($i <= 81)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 81)
                {
                    return true;
                }
                $i += 9;
            }
        }
    }
}