<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Humans\Human;
    use AmadeusZoo\Interfaces\BiteableInterface;
    use AmadeusZoo\Interfaces\InteractableInterface;
    use AmadeusZoo\Interfaces\RunableInterface;
    use AmadeusZoo\Interfaces\WalkableInterface;
    use AmadeusZoo\Interfaces\WufableInterface;
    use AmadeusZoo\Traits\RunableTrait;
    use AmadeusZoo\Traits\WalkableTrait;
    use AmadeusZoo\Traits\WufableTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Dog extends Animal implements WalkableInterface, RunableInterface, WufableInterface, BiteableInterface, InteractableInterface {

        use WalkableTrait, RunableTrait, WufableTrait;

        public function behave()  {
            $this->walk();
            $this->run();
            $this->wuf();
            parent::behave();
        }

        /**
         * @param Human $person
         */
        public function interact(Human $person)  {
            $this->bite($person);
        }

        /**
         * @param Human $person
         */
        public function bite(Human $person)  {
            $biteChance = (bool) random_int(0, 1);
            if ($biteChance === true) {
                $person->setIsBitten($biteChance);
                $this->renderMessage('bites');
            }
        }

    }