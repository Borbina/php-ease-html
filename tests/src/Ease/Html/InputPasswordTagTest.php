<?php

namespace Test\Ease\Html;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:22.
 */
class InputPasswordTagTest extends InputTagTest
{
    /**
     * @var InputPasswordTag
     */
    protected $object;
    public $rendered = '<input type="password" name="test" />';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new \Ease\Html\InputPasswordTag('test');
    }

    
        /**
     * 
     * @covers Ease\Html\InputPasswordTag::draw
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
