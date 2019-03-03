<?php
declare(strict_types=1);

require_once('./components/interfaces/IFoo.php');
require_once('./components/classes/Foo.php');
require_once('./components/classes/Bar.php');

use PHPUnit\Framework\TestCase;

final class BarTest extends TestCase {
    private $bar;
    private $foo;

    protected function setUp() {
        $this->foo = $this->getMockBuilder(Foo::class)
                        ->setMethods(['trimValue'])
                        ->getMock();

        $this->bar = new Bar($this->foo);
    }

    protected function tearDown() {
        $this->bar = null;
    }

    public function testFooCanBeCreated(): void {
        $this->assertInstanceOf(
            Bar::class,
            $this->bar
        );
    }

    public function testGivenBarThenLogValueCallsFooTrimValueWithGivenValue(): void
    {
        $string = "asd";

        $this->foo->expects($this->once())
                 ->method('trimValue')
                 ->with($this->equalTo($string));

        $this->bar->logValue($string);
    }

    
    public function testGivenFooTrimValueReturnsCorrectValue(): void {
        $this->bar = new Bar(new Foo());

        $string = "asd";

        $this->expectOutputString($string);
        $this->bar->logValue($string);
    }
}
