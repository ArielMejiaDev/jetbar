<?php

namespace Arielmejiadev\Jetbar\Tests;

use Orchestra\Testbench\TestCase;
use Arielmejiadev\Jetbar\JetbarServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JetbarServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
