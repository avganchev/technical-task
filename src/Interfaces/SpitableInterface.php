<?php

    namespace AmadeusZoo\Interfaces;

    use AmadeusZoo\Humans\Human;

    /**
     * Interface SpitableInterface
     *
     * @package AmadeusZoo\Interfaces
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    interface SpitableInterface {

        /**
         * @param Human $person
         */
        public function spit(Human $person) ;
    }