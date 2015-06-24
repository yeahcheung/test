<?php

trait A {
    public function sayHello()
    {
        echo 'Hello from A';
    }

    public function sayWorld()
    {
        echo 'World from A';
    }
}

trait B {
    public function sayHello()
    {
        echo 'Hello from B';
    }

    public function sayWorld()
    {
        echo 'World from B';
    }
}

class Talker {
    use A, B {
        A::sayHello insteadof B;
        A::sayWorld insteadof B;
        B::sayWorld insteadof A;
    }
}

$talker = new Talker();
$talker->sayHello();
$talker->sayWorld();

?>
