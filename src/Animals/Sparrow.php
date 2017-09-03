<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Interfaces\FlyableInterface;
    use AmadeusZoo\Interfaces\TweetableInterface;
    use AmadeusZoo\Interfaces\WalkableInterface;
    use AmadeusZoo\Traits\FlyableTrait;
    use AmadeusZoo\Traits\TweetableTrait;
    use AmadeusZoo\Traits\WalkableTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Sparrow extends Animal implements WalkableInterface, FlyableInterface, TweetableInterface {

        use WalkableTrait, FlyableTrait, TweetableTrait;

        public function behave()  {
            $this->walk();
            $this->fly();
            $this->tweet();
            parent::behave();
        }

    }