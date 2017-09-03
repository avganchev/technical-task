<?php

    namespace Tests;

    use AmadeusZoo\Animals\Cat;
    use AmadeusZoo\Animals\Dog;
    use AmadeusZoo\Exceptions\ZooNoAnimalsException;
    use AmadeusZoo\Exceptions\ZooNoVisitorsException;
    use AmadeusZoo\Humans\Human;
    use AmadeusZoo\Zoo;
    use PHPUnit\Framework\TestCase;

    /**
     * @package Tests
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class ZooTest extends TestCase {

        public function testZooVisitorsCount() {
            $zoo = new Zoo([new Cat('Tom')]);

            self::assertCount(0, $zoo->getVisitors());

            $zoo->addVisitor(new Human('Steven Spielberg'))
                ->addVisitor(new Human('Joan Rowling'))
                ->addVisitor(new Human('James Cameron'));

            self::assertCount(3, $zoo->getVisitors());
        }

        public function testZooHasNoAnimals() {
            $this->expectException(ZooNoAnimalsException::class);
            new Zoo([]);
        }

        public function testZooHasNoVisitors() {
            $this->expectException(ZooNoVisitorsException::class);
            $zoo = new Zoo([new Dog('Bolt')]);

            $zoo->explore();
        }

    }
