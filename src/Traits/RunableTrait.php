<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait RunableTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait RunableTrait {
        
        public function run()  {
            $this->renderMessage('running');
        }

    }