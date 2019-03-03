<?php
declare(strict_types=1);

require_once('./components/interfaces/IFoo.php');
require_once('./components/classes/Foo.php');

use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase {
    private $foo;

    protected function setUp() {
        $this->foo = new Foo();
    }

    protected function tearDown() {
        $this->foo = null;
    }

    public function testFooCanBeCreated(): void {
        $this->assertInstanceOf(
            Foo::class,
            $this->foo
        );
    }

    public function testGivenFooThenSetStringSetsTheString(): void
    {
        $string = "asd";

        $this->foo->setString($string);

        $this->assertEquals(
            $string,
            $this->foo->string
        );
    }

    public function testGivenFooThenTrimValueReturnsCorrectValue(): void {
        $string = "asd";

        $this->assertEquals(
            $string,
            $this->foo->trimValue($string)
        );
    }
}
