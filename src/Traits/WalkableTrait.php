<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait WalkableTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait WalkableTrait {

        public function walk()  {
            $this->renderMessage('walking');
        }

    }