<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait FlyableTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait FlyableTrait {

        public function fly()  {
            $this->renderMessage('flying');
        }

    }