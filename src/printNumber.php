<?php 

declare(strict_types=1);
namespace App;

class printNumber
{
    public function __construct()
    {}
    
    public function checkNumber(int $number): string
    {
        $returnedNumber = '';
        switch (true) {
            case (($number%3 === 0) && ($number%5 === 0)):
                $returnedNumber = 'Research Square';
                break;
            case $number%3 === 0:
                $returnedNumber = 'Research';
                break;
            case $number%5 === 0:
                $returnedNumber = 'Square';
                break;
            default:
                $returnedNumber = (string) $number;
                break;
        }
        return $returnedNumber;
    }
    
    public function doLoop(int $max = 100, bool $printToScreen): array
    {
        $return = [];
        for ($i=0; $i<=$max; $i++) {
            $check = $this->checkNumber($i);
            if ($printToScreen) {
                echo 'Number '. $i . ' ' . preg_replace('/[0-9]{1,}/', '', $check) . PHP_EOL;
            }
            $return[$i] = $check;
        }
        return $return;
    }
}