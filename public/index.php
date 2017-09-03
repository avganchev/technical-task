<?php

    use AmadeusZoo\Animals\Camel;
    use AmadeusZoo\Animals\Cat;
    use AmadeusZoo\Animals\Dog;
    use AmadeusZoo\Animals\Rat;
    use AmadeusZoo\Animals\Sparrow;
    use AmadeusZoo\Humans\Human;
    use AmadeusZoo\Zoo;

    include __DIR__ . '/../vendor/autoload.php';

    $zoo = new Zoo([
        new Cat('Garfield'),
        new Sparrow('Jack'),
        new Dog('Bolt'),
        new Rat('Remy'),
        new Camel('Kamlu'),
    ]);

    $zoo->addVisitor(new Human('Steven Spielberg'))
        ->addVisitor(new Human('Joan Rowling'))
        ->addVisitor(new Human('James Cameron'));

    $zoo->explore();