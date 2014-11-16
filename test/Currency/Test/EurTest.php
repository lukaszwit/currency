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

    /**
     * @test
     */
    public function currencyConstructorAssignment_Success()
    {
        $floatAsString = '123456789.00000000000000000000000000000001';
        $eur = new Eur($floatAsString);

        $this->assertInstanceOf('Currency\Eur', $eur);
        $this->assertTrue($floatAsString == $eur);
        $this->assertTrue($floatAsString !== $eur);
        $this->assertTrue($floatAsString === (string)$eur);
    }

    /**
     * @test
     */
    public function eurToJson_Success()
    {
        $eur = new Eur;
        $eur = '123.00000000000000001';

        $eurAsJson = json_encode($eur);

        $expectedEurAsJson = '{"value":"123.00000000000000001","ISO_4217":"EUR"}';
        $this->assertEquals($expectedEurAsJson, $eurAsJson);
    }

    /**
     * @test
     */
    public function jsonSerialize_Success()
    {
        $eur = new Eur('123.00000000000000001');
        $toSerialize = $eur->jsonSerialize();

        $this->assertTrue(is_array($toSerialize));
        $this->assertEquals(2, count($toSerialize));
        $this->assertEquals($toSerialize['value'], '123.00000000000000001');
        $this->assertEquals($toSerialize['ISO_4217'], 'EUR');

    }

    /**
     * @test
     */
    public function iso4217_Success()
    {
        $eur = new Eur();
        $this->assertEquals('EUR', $eur::CURRENCY_ISO_4217);
    }
}
 