<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Interfaces\PiableInterface;
    use AmadeusZoo\Interfaces\WalkableInterface;
    use AmadeusZoo\Traits\PiableTrait;
    use AmadeusZoo\Traits\WalkableTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Rat extends Animal implements WalkableInterface, PiableInterface {

        use WalkableTrait, PiableTrait;

        public function behave()  {
            $this->walk();
            $this->pi();
            parent::behave();
        }
    }