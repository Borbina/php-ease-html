<?php

namespace Test\Ease\Html;

use Test\Ease\DocumentTest;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:19.
 */
class TagTest extends DocumentTest
{
    /**
     * @var Tag
     */
    protected $object;

    /**
     * What we want to get ?
     * @var string
     */
    public $rendered = '< />';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new \Ease\Html\Tag();
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
        $mock->__construct('Test');

        $mock->__construct('Tag', ['name' => 'Tag', 'id' => 'testing']);

        $this->assertEquals('<Tag name="Tag" id="testing" />',
            $mock->getRendered());
    }

    /**
     * @covers Ease\Html\Tag::setObjectName
     */
    public function testSetObjectName()
    {
        $type = $this->object->getTagType();
        if (!$type) {
            $this->assertEquals(get_class($this->object),
                $this->object->setObjectName());
            $type = 'type';
        }
        $this->object->setTagName(null);
        $this->object->setTagType($type);
        $this->assertEquals(get_class($this->object).'@'.$type,
            $this->object->setObjectName());

        $this->object->setTagName('name');
        $this->assertEquals(get_class($this->object).'@name',
            $this->object->setObjectName());
    }

    /**
     * @covers Ease\Html\Tag::setTagName
     */
    public function testSetTagName()
    {
        $this->object->setName = true;
        $this->object->setTagName('Test');
        $this->assertEquals('Test', $this->object->getTagProperty('name'));
    }

    /**
     * @covers Ease\Html\Tag::getTagName
     */
    public function testGetTagName()
    {
        $this->assertNull($this->object->getTagName());
        $this->object->setName = true;
        $this->object->setTagName('Test');
        $this->assertEquals('Test', $this->object->getTagName());
    }

    /**
     * @covers Ease\Html\Tag::setTagType
     */
    public function testSetTagType()
    {
        $this->object->setTagType('Test');
        $this->assertEquals('Test', $this->object->getTagType('name'));
    }

    /**
     * @covers Ease\Html\Tag::getTagType
     */
    public function testGetTagType()
    {
        $this->object->setTagType('Test');
        $this->assertEquals('Test', $this->object->getTagType('name'));
    }

    /**
     * @covers Ease\Html\Tag::setTagClass
     */
    public function testSetTagClass()
    {
        $this->object->setTagClass('Test');
        $this->assertEquals('Test', $this->object->getTagProperty('class'));
    }

    /**
     * @covers Ease\Html\Tag::addTagClass
     */
    public function testAddTagClass()
    {
        $this->object->setTagClass('Test');
        $this->object->addTagClass('Test2');
        $this->assertEquals('Test Test2', $this->object->getTagProperty('class'));
    }

    /**
     * @covers Ease\Html\Tag::getTagClass
     */
    public function testGetTagClass()
    {
        $this->object->setTagClass('Test');
        $this->assertEquals('Test', $this->object->getTagClass());
    }

    /**
     * @covers Ease\Html\Tag::setTagID
     */
    public function testSetTagID()
    {
        $this->object->setTagID('Test');
        $this->assertEquals('Test', $this->object->getTagProperty('id'));
        $this->object->setTagID();
        $this->assertNotEmpty($this->object->getTagProperty('id'));
    }

    /**
     * @covers Ease\Html\Tag::getTagID
     */
    public function testGetTagID()
    {
        $this->object->setTagProperties(['id' => 'Test']);
        $this->assertEquals('Test', $this->object->getTagID());
    }

    /**
     * @covers Ease\Html\Tag::getTagProperty
     */
    public function testGetTagProperty()
    {
        $this->object->setTagProperties(['test' => 'Test']);
        $this->assertEquals('Test', $this->object->getTagProperty('test'));
    }

    /**
     * @covers Ease\Html\Tag::setTagProperties
     */
    public function testSetTagProperties()
    {
        $this->object->tagProperties = ['title' => 'test'];
        $this->object->setTagProperties(['id' => 'Test', 'name' => 'unit']);
        $this->assertEquals('Test', $this->object->getTagID());
        $this->assertEquals('unit', $this->object->getTagName());
    }

    /**
     * @covers Ease\Html\Tag::tagPropertiesToString
     */
    public function testTagPropertiesToString()
    {
        $this->object->tagProperties  = [];
        $this->object->setTagProperties(['id' => 'Test', 'name' => 'unit', 'selected']);
        $this->assertEquals('id="Test" name="unit" selected',$this->object->tagPropertiesToString());
    }

    /**
     * @covers Ease\Html\Tag::setTagCss
     */
    public function testSetTagCss()
    {
        $this->object->setTagCss(['color' => 'blue', 'margin' => '5px']);
        $this->assertEquals('color:blue;margin:5px;',
            $this->object->cssPropertiesToString());
    }

    /**
     * @covers Ease\Html\Tag::cssPropertiesToString
     */
    public function testCssPropertiesToString()
    {
        $this->object->setTagCss(['color' => 'blue', 'margin' => '5px']);
        $this->assertEquals('color:blue;margin:5px;',
            $this->object->cssPropertiesToString());
    }

    /**
     * @covers Ease\Html\Tag::draw
     */
    public function testDraw($whatWant = null)
    {
        $tagType = $this->object->getTagType();
        if (!strlen($tagType)) {
            $tagType = 'test';
            $this->object->setTagType($tagType);
        }
        ob_start();
        $this->object->draw();
        $drawed = ob_get_contents();
        ob_end_clean();
        if (is_null($whatWant)) {
            $this->assertEquals("<$tagType />", $drawed);
        } else {
            $this->assertEquals($whatWant, $drawed);
        }
    }

    /**
     * @covers Ease\Html\Tag::finalize
     */
    public function testFinalize()
    {
        $this->object->setTagCss(['color' => 'black']);
        $this->object->finalize();
        $this->assertEquals('color:black;',
            $this->object->getTagProperty('style'), 'error finializing tag');
    }
}
