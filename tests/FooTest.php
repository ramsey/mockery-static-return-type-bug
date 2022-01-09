<?php

namespace Foo\Tests;

use Foo\Foo;
use Mockery;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testFoo(): void
    {
        $fooMock = Mockery::mock(Foo::class);
        $fooMock->allows('setFoo');

        $fooMock->setFoo('some value');

        $this->assertTrue(true);
    }
}

