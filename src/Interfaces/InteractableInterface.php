<?php

    namespace AmadeusZoo\Interfaces;

    use AmadeusZoo\Humans\Human;

    /**
     * Interface InteractableInterface
     *
     * @package AmadeusZoo\Interfaces
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    interface InteractableInterface {

        /**
         * @param Human $person
         */
        public function interact(Human $person) ;

    }