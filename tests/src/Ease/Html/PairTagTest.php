<?php
declare (strict_types=1);

namespace Test\Ease\Html;

use Ease\Html\PairTag;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:15.
 */
class PairTagTest extends TagTest
{
    /**
     * @var PairTag
     */
    protected $object;

    /**
     * What we want to get ?
     * @var string
     */
    public $rendered = '<></>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new PairTag();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }

    public function testConstructor()
    {
        $classname = get_class($this->object);

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $mock->__construct('PairTag', ['name' => 'Tag', 'id' => 'testing']);
        $mock->__construct('PairTag', ['name' => 'Tag', 'id' => 'testing'],
            'Initial Content');
        $mock->__construct('Test');
        $this->assertObjectHasAttribute('pageParts', $mock);
    }

    /**
     * @covers Ease\Html\PairTag::draw
     */
    public function testDraw($whatWant = null)
    {
        $tagType = $this->object->getTagType();
        if (is_null($whatWant)) {
            if (is_null($this->rendered)) {
                if (!empty($this->object->tagProperties)) {
                    $whatWant = "<$tagType ".$this->object->tagPropertiesToString()."></$tagType>";
                } else {
                    $whatWant = "<$tagType></$tagType>";
                }
            } else {
                $whatWant = $this->rendered;
            }
        }
        ob_start();
        $this->object->draw();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($whatWant, $drawed);
    }

    /**
     * @covers Ease\Html\PairTag::tagBegin
     */
    public function testTagBegin($tagBegin = null)
    {
        $tagType = $this->object->getTagType();
        if (!empty($this->object->tagProperties)) {
            $tagBegin = "<".trim($tagType.' '.$this->object->tagPropertiesToString()).'>';
        } else {
            $tagBegin = "<$tagType>";
        }
        ob_start();
        $this->object->tagBegin();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals($tagBegin, $drawed);
    }

    /**
     * @covers Ease\Html\PairTag::tagEnclousure
     */
    public function testTagEnclousure()
    {
        $tagType = $this->object->getTagType();
        if (!strlen($tagType)) {
            $tagType = 'test';
            $this->object->setTagType($tagType);
        }
        ob_start();
        $this->object->tagEnclousure();
        $drawed = ob_get_contents();
        ob_end_clean();
        $this->assertEquals("</$tagType>", $drawed);
    }
}
