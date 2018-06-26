<?php 

declare(strict_types=1);
namespace Tests;

use App\printNumber;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    /**
     * @dataProvider providerNumbers
     * @param int $number
     * @param string $message
     * @return void
     */
    public function testNumber(int $number, string $message)
    {
        $printNumber = new printNumber();
        $this->assertEquals($printNumber->checkNumber($number), $message);
    }
    
    /**
     * @return array
     */
    public function providerNumbers(): array
    {
        return [
            'one' => [1, '1'],
            'three' => [3, 'Research'],
            'five' => [5, 'Square'],
            'fifteen' => [15, 'Research Square'],
        ];
    }
}