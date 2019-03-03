<?php
    require_once('./components/interfaces/IFoo.php');
    require_once('./components/classes/Foo.php');
    require_once('./components/classes/Bar.php');

    $foo = new Foo();
    $bar = new Bar($foo);

    var_dump($foo->trimValue(time()));
    $bar->logValue(time());
?>

