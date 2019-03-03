<?php 

class Bar {
    private $foo;

    public function __construct(iFoo $foo) {
        $this->foo = $foo;
    }

    public function logValue(string $string) {
        var_dump($this->foo->trimValue($string));
    }
}

?>