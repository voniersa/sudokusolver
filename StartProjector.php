<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:50
 */

namespace flyeralarm\sudokuV5;

class StartProjector
{
    public function getHtml() : String
    {
        $htmlTable = file_get_contents('startTemplate.html');
        $j = 2;
        for($i = 1; $i < 82; $i++)
        {
            $htmlTable = str_replace('%textbox%','<input type="text" size="1" maxlength="1" name="'.$i.'">', $htmlTable);
            $htmlTable = str_replace('%next%', '%textbox% %next%', $htmlTable);
            if($j == 3 || $j == 6 || $j == 12 || $j == 15 || $j == 21 || $j == 24)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% .', $htmlTable);
            }
            if($j == 9 || $j == 18)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% <br>', $htmlTable);
            }
            if($j == 27)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% <br><br>', $htmlTable);
                $j = 0;
            }
            $j++;
        }
        $htmlTable = str_replace('%textbox%', '', $htmlTable);
        $htmlTable = str_replace('%next%', '', $htmlTable);
        $htmlTable = str_replace('%textbox2%', '', $htmlTable);
        $htmlTable = str_replace('%next2%', '', $htmlTable);
        return $htmlTable;
    }

    public function showLoesung($usereingabe, $ausgabe) : String
    {
        $htmlTable = file_get_contents('startTemplate.html');
        $j = 2;
        for($i = 1; $i < 82; $i++)
        {
            $htmlTable = str_replace('%textbox2%','<input type="text" size="1" value="'.$ausgabe[$i].'" readonly>', $htmlTable);
            $htmlTable = str_replace('%next2%', '%textbox2% %next2%', $htmlTable);
            if($j == 3 || $j == 6 || $j == 12 || $j == 15 || $j == 21 || $j == 24)
            {
                $htmlTable = str_replace('%textbox2%', '%textbox2% .', $htmlTable);
            }
            if($j == 9 || $j == 18)
            {
                $htmlTable = str_replace('%textbox2%', '%textbox2% <br>', $htmlTable);
            }
            if($j == 27)
            {
                $htmlTable = str_replace('%textbox2%', '%textbox2% <br><br>', $htmlTable);
                $j = 0;
            }
            $j++;
        }
        $htmlTable = str_replace('%textbox2%', '', $htmlTable);
        $htmlTable = str_replace('%next2%', '', $htmlTable);
        $htmlTable = str_replace('<INPUT type="submit" name="submit" value="Solve Sudoku">', '', $htmlTable);

        $j = 2;
        for($i = 1; $i < 82; $i++)
        {
            $htmlTable = str_replace('%textbox%','<input type="text" size="1" value="'.$usereingabe[$i].'" readonly>', $htmlTable);
            $htmlTable = str_replace('%next%', '%textbox% %next%', $htmlTable);
            if($j == 3 || $j == 6 || $j == 12 || $j == 15 || $j == 21 || $j == 24)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% .', $htmlTable);
            }
            if($j == 9 || $j == 18)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% <br>', $htmlTable);
            }
            if($j == 27)
            {
                $htmlTable = str_replace('%textbox%', '%textbox% <br><br>', $htmlTable);
                $j = 0;
            }
            $j++;
        }
        $htmlTable = str_replace('%textbox%', '', $htmlTable);
        $htmlTable = str_replace('%next%', '', $htmlTable);
        return $htmlTable;
    }
}
