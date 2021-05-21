<?php
declare (strict_types=1);

namespace Test\Ease\Html;

use Ease\Html\FieldSet;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:01.
 */
class FieldSetTest extends PairTagTest
{
    /**
     * @var FieldSet
     */
    protected $object;
    public $rendered = '<fieldset><legend>test</legend>content</fieldset>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new \Ease\Html\FieldSet('test', 'content');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }

    /**
     * @covers Ease\Html\FieldSet::setLegend
     *
     * @todo   Implement testSetLegend().
     */
    public function testSetLegend()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\Html\FieldSet::finalize
     *
     * @todo   Implement testFinalize().
     */
    public function testFinalize()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Ease\Html\FieldSet::getTagName
     */
    public function testGetTagName()
    {
        $this->assertEquals('test', $this->object->getTagName());
    }

    /**
     * @covers Ease\Html\FieldSet::setObjectName
     */
    public function testSetObjectName()
    {
        $this->assertEquals(get_class($this->object).'@test',
            $this->object->setObjectName());
    }
}
