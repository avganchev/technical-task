<?php

    namespace Tests\Animals;

    use AmadeusZoo\Animals\Camel;
    use AmadeusZoo\Animals\Cat;
    use AmadeusZoo\Animals\Dog;
    use AmadeusZoo\Animals\Sparrow;
    use AmadeusZoo\Humans\Human;
    use PHPUnit\Framework\TestCase;

    /**
     * @package Tests\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class AnimalTest extends TestCase {

        public function testAnimalName() {
            $cat = new Cat('Garfield');
            static::assertEquals('Garfield', $cat->getName());
        }

        public function testAnimalHasNoName() {
            $this->expectException(\InvalidArgumentException::class);
            new Cat('');
        }

        public function testAnimalType() {
            $camel = new Camel('Kamlu');
            static::assertEquals('Camel', $camel->getType());
        }

        public function testBehaviour() {
            $sparrow = new Sparrow('Jack');
            $sparrow->fly();
            $sparrow->tweet();
            $this->expectOutputString("Sparrow Jack flying\nSparrow Jack tweeted\n");
        }


        public function testInteraction() {
            $person = new Human('James Cameron');
            $dog = $this->createMock(Dog::class);

            $dog->expects(static::any())
                ->method('interact')
                ->willReturnCallback(function (Human $person) {
                    $person->setIsBitten(true);
                });

            static::assertFalse($person->isBitten());

            $dog->interact($person);

            static::assertTrue($person->isBitten());
        }

    }
