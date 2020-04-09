<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 10:00
 */

namespace flyeralarm\sudokuV5;


class BoxChecker
{
    public function checkBox(int $posi, array $array, int $einzutragendeZahl) : bool
    {
        if($posi == 1 || $posi == 2 || $posi == 3 || $posi == 10 || $posi == 11 || $posi == 12 || $posi == 19 || $posi == 20 || $posi == 21)
        {
            $i = 1;
            while($i <= 21)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 21)
                {
                    return true;
                }
                if($i == 3 || $i == 12)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 4 || $posi == 5 || $posi == 6 || $posi == 13 || $posi == 14 || $posi == 15 || $posi == 22 || $posi == 23 || $posi == 24)
        {
            $i = 4;
            while($i <= 24)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 24)
                {
                    return true;
                }
                if($i == 6 || $i == 15)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 7 || $posi == 8 || $posi == 9 || $posi == 16 || $posi == 17 || $posi == 18 || $posi == 25 || $posi == 26 || $posi == 27)
        {
            $i = 7;
            while($i <= 27)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 27)
                {
                    return true;
                }
                if($i == 9 || $i == 18)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 28 || $posi == 29 || $posi == 30 || $posi == 37 || $posi == 38 || $posi == 39 || $posi == 46 || $posi == 47 || $posi == 48)
        {
            $i = 28;
            while($i <= 48)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 48)
                {
                    return true;
                }
                if($i == 30 || $i == 39)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 31 || $posi == 32 || $posi == 33 || $posi == 40 || $posi == 41 || $posi == 42 || $posi == 49 || $posi == 50 || $posi == 51)
        {
            $i = 31;
            while($i <= 51)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 51)
                {
                    return true;
                }
                if($i == 33 || $i == 42)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 34 || $posi == 35 || $posi == 36 || $posi == 43 || $posi == 44 || $posi == 45 || $posi == 52 || $posi == 53 || $posi == 54)
        {
            $i = 34;
            while($i <= 54)
            {
                if($array[$i] == $einzutragendeZahl)
                {
                    return false;
                }
                if($array[$i] != $einzutragendeZahl && $i == 54)
                {
                    return true;
                }
                if($i == 36 || $i == 45)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 55 || $posi == 56 || $posi == 57 || $posi == 64 || $posi == 65 || $posi == 66 || $posi == 73 || $posi == 74 || $posi == 75)
        {
            $i = 55;
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
                if($i == 57 || $i == 66)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 58 || $posi == 59 || $posi == 60 || $posi == 67 || $posi == 68 || $posi == 69 || $posi == 76 || $posi == 77 || $posi == 78)
        {
            $i = 58;
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
                if($i == 60 || $i == 69)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
        if($posi == 61 || $posi == 62 || $posi == 63 || $posi == 70 || $posi == 71 || $posi == 72 || $posi == 79 || $posi == 80 || $posi == 81)
        {
            $i = 61;
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
                if($i == 63 || $i == 72)
                {
                    $i += 7;
                }else{
                    $i += 1;
                }
            }
        }
    }
}