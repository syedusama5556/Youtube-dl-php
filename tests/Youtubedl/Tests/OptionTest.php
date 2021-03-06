<?php

namespace Youtubedl\Tests;

use Youtubedl\Option;

class OptionTest extends \PHPUnit_Framework_TestCase
{
    protected $option;

    /**
     * @test
     */
    public function shouldBeOption()
    {
        $this->assertInstanceOf('Youtubedl\Option', $this->option->getListExtractors());
    }

    /**
     * @test
     */
    public function shouldEmptyOptionBeString()
    {
        $this->assertInternalType('string', (string) $this->option);
    }

    /**
     * @test
     */
    public function shouldOptionBeString()
    {
        $this->option->getListExtractors()
            ->setUserAgent('Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
        $this->assertInternalType('string', (string) $this->option);
    }

    public function setup()
    {
        $this->option = new Option();
    }
}
