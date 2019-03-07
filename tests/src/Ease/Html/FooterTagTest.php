<?php

namespace Test\Ease\Html;

use Ease\Html\FooterTag;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:27.
 */
class FooterTagTest extends PairTagTest
{
    /**
     * @var FooterTag
     */
    protected $object;
    public $rendered = '<footer></footer>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new FooterTag();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }
}
