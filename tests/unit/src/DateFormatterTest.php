<?php

use DateFormatter\DateFormatter;
use PHPUnit\Framework\TestCase;

class DateFormatterTest extends TestCase
{

    /**
     * @covers DateFormatter\DateFormatter::newDateTime
     */
    public function testNewDateTime()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->newDateTime($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInstanceOf(DateTime::class, $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHumanNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->dateDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHuman()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->dateDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::dateDbToHuman
     */
    public function testDateDbToHumanFormat()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d');
        $date = $classFormatter->dateDbToHuman($myDate, 'd/m/Y');
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::dateHumanToDb
     */
    public function testdateHumanToDbNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->dateHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::dateHumanToDb
     */
    public function testdateHumanToDb()
    {
        $classFormatter = new DateFormatter();
        $myDate =  date('d/m/Y H:i:s');
        $date = $classFormatter->dateHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHumanNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->datetimeDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHuman()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d H:i:s');
        $date = $classFormatter->datetimeDbToHuman($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::datetimeDbToHuman
     */
    public function testDatetimeDbToHumanFormat()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('Y-m-d H:i:s');
        $date = $classFormatter->datetimeDbToHuman($myDate, 'd/m/Y');
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::datetimeHumanToDb
     */
    public function testDatetimeHumanToDbNull()
    {
        $classFormatter = new DateFormatter();
        $myDate = null;
        $date = $classFormatter->datetimeHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertEquals(null, $date);
    }

    /**
     * @covers DateFormatter\DateFormatter::datetimeHumanToDb
     */
    public function testDatetimeHumanToDb()
    {
        $classFormatter = new DateFormatter();
        $myDate = date('d/m/Y H:i:s');
        $date = $classFormatter->datetimeHumanToDb($myDate);
        $this->assertInstanceOf(DateFormatter::class, $classFormatter);
        $this->assertInternalType('string', $date);
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
