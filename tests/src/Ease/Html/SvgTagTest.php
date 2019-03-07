<?php

namespace Test\Ease\Html;

use Ease\Html\SvgTag;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:27.
 */
class SvgTagTest extends PairTagTest
{
    /**
     * @var SvgTag
     */
    protected $object;
    public $rendered = '<svg></svg>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new SvgTag();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }
}
