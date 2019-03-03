<?php 

class Foo implements iFoo {
    private $value;

    public function __construct() {
    }

    public function setString(string $string) {
        $this->$value = $string;
    }

    public function trimValue(string $string) {
        return trim($string);
    }
}

?>