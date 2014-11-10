<?php
/**
 * Created by PhpStorm.
 * User: lukaszwitczak
 * Date: 11/2/14
 * Time: 6:30 PM
 */

namespace Currency\Test;


use Currency\Eur;

class EurTest extends \PHPUnit_Framework_TestCase
{

    public function notStringProvider()
    {
        return [
            [0],
            [1],
            [-2],
            [1.8],
            [1.0000000000000001],
            [new \stdClass()],
            [[]],
        ];
    }

    public function floatAsStringProvider()
    {
        return [
            ["0"],
            ["1"],
            ['-2'],
            ['1.8'],
            ['1.0000000000000001'],
        ];
    }

    /**
     * @test
     * @dataProvider notStringProvider
     */
    public function currency_Failure($notAstring)
    {
        $eur = new Eur;
        $this->setExpectedException('UnexpectedValueException');
        $eur = $notAstring;
    }

    /**
     * @test
     * @dataProvider floatAsStringProvider
     */
    public function currency_Success($floatAsString)
    {
        $eur = new Eur;
        $eur = (string) $floatAsString;

        $this->assertInstanceOf('Currency\Eur', $eur);
        $this->assertTrue($floatAsString == $eur);
        $this->assertTrue($floatAsString !== $eur);
        $this->assertTrue($floatAsString === (string)$eur);
    }
}
 