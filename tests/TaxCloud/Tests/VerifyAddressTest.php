<?php
namespace TaxCloud\Tests;

use TaxCloud\Request\VerifyAddress;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-21 at 18:56:23.
 */
class VerifyAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var VerifyAddress
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new VerifyAddress(
          '12345678',
          new \TaxCloud\Address(
            '123 Main St',
            'Suite A',
            'Braithwaite',
            'OK',
            '73622',
            '1234'
          )
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers TaxCloud\VerifyAddress::setUspsUserID
     * @todo   Implement testSetUspsUserID().
     */
    public function testSetUspsUserID()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers TaxCloud\VerifyAddress::getUspsUserID
     * @todo   Implement testGetUspsUserID().
     */
    public function testGetUspsUserID()
    {
      $this->assertEquals('12345678', $this->object->getUspsUserID());
    }

    /**
     * @covers TaxCloud\VerifyAddress::getAddress1
     * @todo   Implement testGetAddress1().
     */
    public function testGetAddress1()
    {
      $this->assertEquals('123 E Main St', $this->object->getAddress1());
    }

    /**
     * @covers TaxCloud\VerifyAddress::getAddress2
     * @todo   Implement testGetAddress2().
     */
    public function testGetAddress2()
    {
      $this->assertEquals('Suite A',$this->object->getAddress2());
    }

    /**
     * @covers TaxCloud\VerifyAddress::getCity
     * @todo   Implement testGetCity().
     */
    public function testGetCity()
    {
      $this->assertEquals('Braithwaite', $this->object->getCity());
    }

    /**
     * @covers TaxCloud\VerifyAddress::getState
     * @todo   Implement testGetState().
     */
    public function testGetState()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers TaxCloud\VerifyAddress::getZip5
     * @todo   Implement testGetZip5().
     */
    public function testGetZip5()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers TaxCloud\VerifyAddress::getZip4
     * @todo   Implement testGetZip4().
     */
    public function testGetZip4()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}