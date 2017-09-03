<?php

    namespace AmadeusZoo;

    use AmadeusZoo\Animals\Animal;
    use AmadeusZoo\Exceptions\ZooNoAnimalsException;
    use AmadeusZoo\Exceptions\ZooNoVisitorsException;
    use AmadeusZoo\Humans\Human;
    use AmadeusZoo\Interfaces\InteractableInterface;
    use AmadeusZoo\Traits\OutputTrait;

    /**
     * @package AmadeusZoo
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Zoo {

        use OutputTrait;

        /**
         * @var Animal[]
         */
        protected $animals;

        /**
         * @var Human[]
         */
        protected $visitors = [];

        /**
         * Zoo constructor.
         *
         * @param Animal[] $animals
         */
        public function __construct(array $animals) {
            if (count($animals) === 0) {
                throw new ZooNoAnimalsException('Zoo needs animals. Otherwise we will have nothing to show to our visitors.');
            }

            foreach ($animals as $animal) {
                $this->addAnimal($animal);
            }
        }

        /**
         * @param Animal $animal
         *
         * @return Zoo
         */
        private function addAnimal(Animal $animal) : self {
            $this->animals[] = $animal;
            return $this;
        }

        public function explore()  {
            if (count($this->getVisitors()) === 0) {
                throw new ZooNoVisitorsException('Some ghosts detected. To explore animals you need to add visitors');
            }

            $this->render('Welcome to the world\'s most interesting Zoo.');
            foreach ($this->animals as $animal) {
                $animal->behave();
                if ($animal instanceof InteractableInterface) {
                    foreach ($this->visitors as $visitor) {
                        $this->render($visitor->getName() . ' interacted with a ' . $animal->getType() . ' named ' . $animal->getName());
                        $visitor->interact($animal);
                    }
                }
            }
        }

        /**
         * @param Human $person
         *
         * @return Zoo
         */
        public function addVisitor(Human $person) : self {
            $this->visitors[] = $person;
            return $this;
        }

        /**
         * @return Human[]
         */
        public function getVisitors() : array {
            return $this->visitors;
        }


    }