<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Humans\Human;
    use AmadeusZoo\Interfaces\InteractableInterface;
    use AmadeusZoo\Interfaces\RunableInterface;
    use AmadeusZoo\Interfaces\SpitableInterface;
    use AmadeusZoo\Interfaces\WalkableInterface;
    use AmadeusZoo\Traits\RunableTrait;
    use AmadeusZoo\Traits\WalkableTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Camel extends Animal implements WalkableInterface, RunableInterface, SpitableInterface, InteractableInterface {

        use WalkableTrait, RunableTrait;

        /**
         * @param Human $person
         */
        public function interact(Human $person)  {
            $this->spit($person);
        }

        /**
         * @param Human $person
         */
        public function spit(Human $person)  {
            $spitChance = (bool) random_int(0, 1);
            if ($spitChance === true) {
                $person->setIsSpitten($spitChance);
                $this->renderMessage('spits');
            }
        }
    }