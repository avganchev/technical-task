<?php

    namespace AmadeusZoo\Traits;

    /**
     * Trait TweetableTrait
     *
     * @package AmadeusZoo\Traits
     */
    trait TweetableTrait {

        public function tweet()  {
            $this->renderMessage('tweeted');
        }

    }