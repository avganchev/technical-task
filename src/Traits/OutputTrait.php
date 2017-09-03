<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait OutputTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait OutputTrait {

        /**
         * @param string $message
         */
        public function render(string $message) {
            echo $message . '<br>';
        }

    }
