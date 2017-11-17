<?php

namespace App\Tests;

use App\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    /**
     * @var App
     */
    private $app;

    public function setUp()
    {
        $this->app = new App();
    }

    /**
     * @test
     */
    public function itShouldReturn0()
    {
        $this->assertEquals(0, $this->app->run(0));
        $this->assertEquals(1, $this->app->run(1));
    }
}