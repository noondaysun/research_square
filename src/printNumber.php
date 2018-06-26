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
}