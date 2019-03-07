<?php

namespace Test\Ease\Html;

use \Ease\Html\ImgTag;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:00.
 */
class ImgTagTest extends TagTest
{
    /**
     * @var ImgTag
     */
    protected $object;
    public $rendered = '<img src="http://localhost/favicon.png" />';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new ImgTag('http://localhost/favicon.png');
    }

    /**
     * 
     * @covers Ease\Html\ImgTag::draw
     */
    public function testDraw($whatWant = null)
    {
        parent::testDraw($this->rendered);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }
}
