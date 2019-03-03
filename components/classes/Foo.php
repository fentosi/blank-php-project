<?php 

class Foo implements iFoo {
    public $string;

    public function __construct() {
    }

    public function setString(string $string):void {
        $this->string = $string;
    }

    public function trimValue(string $string):string {
        return trim($string);
    }
}

?>