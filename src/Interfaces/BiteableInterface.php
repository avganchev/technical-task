<?php

    namespace AmadeusZoo\Interfaces;

    use AmadeusZoo\Humans\Human;

    /**
     * Interface BiteableInterface
     *
     * @package AmadeusZoo\Interfaces
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    interface BiteableInterface {

        /**
         * @param Human $person
         */
        public function bite(Human $person) ;


    }