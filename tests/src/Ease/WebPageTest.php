<?php

namespace Test\Ease;

use Ease\WebPage;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:58:34.
 */
class WebPageTest extends DocumentTest
{
    /**
     * @var WebPage
     */
    protected $object;
    public $rendered = '<!DOCTYPE html><html lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title>
<style></style></head><body>
<script src="test.js"></script>

<script>
// <![CDATA[
window.location = "http://v.s.cz/"
window.location = "login.php"
// ]]>
</script>


<script>
// <![CDATA[
$(document).ready(function () { alert("test") });
// ]]>
</script>
</body></html>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new WebPage();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }

    /**
     * @covers Ease\WebPage::setTagID
     */
    public function testSetTagID()
    {
        $this->object->setTagID('test');
        $this->assertEquals('test', $this->object->getTagID());
    }

    /**
     * @covers Ease\WebPage::addItem
     */
    public function testAddItem()
    {
        $this->object->emptyContents();
        $tester = new \Ease\Html\SpanTag();
        $this->object->addItem($tester);
        $this->assertEquals($this->object->getFirstPart(), $tester);
    }

    /**
     * @covers Ease\WebPage::includeJavaScript
     */
    public function testIncludeJavaScript()
    {
        \Ease\WebPage::singleton()->javaScripts = [];
        $this->object->includeJavaScript('test.js');
        $this->assertEquals(['#test.js'],
            \Ease\WebPage::singleton()->javaScripts);
    }

    /**
     * @covers Ease\WebPage::addJavaScript
     */
    public function testAddJavaScript()
    {
        $this->assertEquals(0, $this->object->addJavaScript('alert("test")'));
    }

    /**
     * @covers Ease\WebPage::addToScriptsStack
     */
    public function testAddToScriptsStack()
    {
        $this->assertEquals(0, $this->object->addToScriptsStack('var test = 1;'));
    }

    /**
     * @covers Ease\WebPage::addCSS
     */
    public function testAddCSS()
    {
        $this->assertTrue($this->object->addCSS('border: 1px solid red'));
    }

    /**
     * @covers Ease\WebPage::includeCss
     */
    public function testIncludeCss()
    {
        $this->assertTrue($this->object->includeCss('test.css'));
    }

    /**
     * @covers Ease\WebPage::getStatusMessagesAsHtml
     */
    public function testGetStatusMessagesAsHtml()
    {
        \Ease\Shared::singleton()->cleanMessages();
        \Ease\Shared::singleton()->addStatusMessage('success Status message for testGetStatusMessagesAsHtml',
            'success');
        \Ease\Shared::singleton()->addStatusMessage('warning Status message for testGetStatusMessagesAsHtml',
            'warning');
        \Ease\Shared::singleton()->addStatusMessage('error Status message for testGetStatusMessagesAsHtml',
            'error');
        $this->assertEquals('<div><div style="color: #2C5F23;">success Status message for testGetStatusMessagesAsHtml</div><div style="color: #AB250E;">warning Status message for testGetStatusMessagesAsHtml</div><div style="color: red;">error Status message for testGetStatusMessagesAsHtml</div></div>',
            $this->object->getStatusMessagesAsHtml()->__toString());
        \Ease\Shared::singleton()->cleanMessages();
    }

    /**
     * @covers Ease\WebPage::draw
     */
    public function testDraw($whatWant = null)
    {
        ob_start();
        $this->object->draw();
        $this->assertEquals('<!DOCTYPE html><html lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title></title>
<style></style></head><body>
<script src="test.js"></script>

<script>
// <![CDATA[
$(document).ready(function () { alert("test") });
// ]]>
</script>
</body></html>', ob_get_contents());
        ob_end_flush();
    }

    /**
     * @covers Ease\WebPage::finalizeRegistred
     */
    public function testFinalizeRegistred()
    {
        $this->object->finalizeRegistred();
        $this->assertEmpty(WebPage::$allItems);
    }

    /**
     * @covers Ease\WebPage::setPageTitle
     *
     * @todo   Implement testSetPageTitle().
     */
    public function testSetPageTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
