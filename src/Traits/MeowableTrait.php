<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait MeowableTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait MeowableTrait {

        public function meow()  {
            $this->renderMessage('meowing');
        }

    }