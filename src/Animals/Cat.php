<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Interfaces\MeowableInterface;
    use AmadeusZoo\Interfaces\WalkableInterface;
    use AmadeusZoo\Traits\MeowableTrait;
    use AmadeusZoo\Traits\WalkableTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Cat extends Animal implements WalkableInterface, MeowableInterface {

        use WalkableTrait, MeowableTrait;

        public function behave()  {
            $this->walk();
            $this->meow();
            parent::behave();
        }
    }