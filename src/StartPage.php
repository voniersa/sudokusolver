<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 26.11.18
 * Time: 09:45
 */

namespace flyeralarm\sudokuV5;


class StartPage implements Page
{
    private $startProjector;
    private $reader;
    private $rowChecker;
    private $columnChecker;
    private $boxChecker;
    private $array2;
    private $array;

    public function __construct(StartProjector $startProjector, Reader $reader, RowChecker $rowChecker, ColumnChecker $columnChecker, BoxChecker $boxChecker)
    {
        $this->startProjector = $startProjector;
        $this->reader = $reader;
        $this->rowChecker = $rowChecker;
        $this->columnChecker = $columnChecker;
        $this->boxChecker = $boxChecker;
    }

    public function run()
    {
        if(!$_POST['submit'])
        {
            return $this->startProjector->getHtml();
        } else {
            $this->array = $this->reader->read();
            $eingabe = $this->reader->read();
            $this->array2 = $this->reader->read2();



            while($this->array2['finish'] == 'nein')
            {
                $value = $this->insertNewNumber();
                if($value['unmoeglich'] == 'ja')
                {
                    $this->array2['unmoeglich'] = 'nein';
                    a:
                    $value = $this->changePreviousNumber();
                    if($value['maxwert'] == 'ja')
                    {
                        $this->array2['maxwert'] = 'nein';
                        goto a;
                    }
                }
            }
            return $this->startProjector->showLoesung($eingabe, $this->array);
        }
    }

    private function insertNewNumber()
    {
        if($this->getNull() != 99)
        {
            $positionNow = $this->getNull($this->array2);
            for($einzutragendeZahl = 1; $einzutragendeZahl <= 9; $einzutragendeZahl++)
            {
                if($this->rowChecker->checkRow($positionNow, $this->array, $einzutragendeZahl) && $this->columnChecker->checkColumn($positionNow, $this->array, $einzutragendeZahl) && $this->boxChecker->checkBox($positionNow, $this->array, $einzutragendeZahl))
                {
                    $this->array[$positionNow] = $einzutragendeZahl;
                    $this->array2[$positionNow] = $einzutragendeZahl;
                    return $this->array2;
                } else {
                    if($einzutragendeZahl == 9)
                    {
                        $this->array2['unmoeglich'] = 'ja';
                        return $this->array2;
                    }
                }
            }
        } else {
            $this->array2['finish'] = "ja";
            return $this->array2;
        }
    }

    private function getPreviousPosition()
    {
        for($i = 81; $i >= 1; $i--)
        {
            if($this->array2[$i] != 'a' && $this->array2[$i] != 'x')
            {
                $wert = $this->array2[$i];
                $previousPosition = array('1' => $i, '2' => $wert);
                return $previousPosition;
            } else {
                if($i == 1)
                {
                    print_r("Unmööööööööglich!!!!!");
                }
            }
        }
    }

    private function changePreviousNumber()
    {
        $position = $this->getPreviousPosition()['1'];
        $wert = $this->getPreviousPosition()['2'];
        while($wert != 9)
        {
            $wert++;
            if($this->rowChecker->checkRow($position, $this->array, $wert) && $this->columnChecker->checkColumn($position, $this->array, $wert) && $this->boxChecker->checkBox($position, $this->array, $wert))
            {
                $this->array[$position] = $wert;
                $this->array2[$position] = $wert;
                return $this->array2;
            }
        }
        $this->array[$position] = '';
        $this->array2[$position] = 'x';
        $this->array2['maxwert'] = 'ja';
        return $this->array2;
    }

    private function getNull() : int
    {
        for($i = 1; $i < 82; $i++)
        {
            if($this->array2[$i] == 'x')
            {
                return $i;
            }
        }
        return 99;
    }

    private function loesungAnzeigen(array $ausgabe)
    {
        $j = 1;
        for($i = 1; $i < 82; $i++)
        {
            echo '<input type="text" size="1" value="'.$ausgabe[$i].'"readonly>';
            if($j == 3 || $j == 6 || $j == 12 || $j == 15 || $j == 21 || $j == 24)
            {
                echo ".";
            }
            if($j == 9 || $j == 18)
            {
                echo '<br>';
            }
            if($j == 27)
            {
                echo '<br><br>';
                $j = 0;
            }
            $j++;
        }
    }
}
