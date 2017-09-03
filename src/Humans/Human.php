<?php

    namespace AmadeusZoo\Humans;

    use AmadeusZoo\Interfaces\InteractableInterface;
    use AmadeusZoo\Traits\OutputTrait;

    /**
     * @package AmadeusZoo\Humans
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    class Human {

        use OutputTrait;

        /**
         * @var string
         */
        protected $name;

        /**
         * @var bool
         */
        protected $isBitten = false;

        /**
         * @var bool
         */
        protected $isSpitten = false;

        /**
         * Human constructor.
         *
         * @param string $name
         */
        public function __construct(string $name) {
            $this->name = $name;
        }

        /**
         * @param bool $isBitten
         */
        public function setIsBitten(bool $isBitten)  {
            $this->isBitten = $isBitten;
        }

        /**
         * @param bool $isSpitten
         */
        public function setIsSpitten(bool $isSpitten)  {
            $this->isSpitten = $isSpitten;
        }

        /**
         * @param InteractableInterface $animal
         */
        public function interact(InteractableInterface $animal)  {
            $animal->interact($this);
            if ($this->isBitten) {
                $this->render($this->getName() . ': Ow! Help Me! I was bitten!');
                $this->setIsBitten(false);
            }
            if ($this->isSpitten) {
                $this->render($this->getName() . ': Ow! Help Me! I was spitten!');
                $this->setIsBitten(false);
            }
        }

        /**
         * @return string
         */
        public function getName() : string {
            return $this->name;
        }

        /**
         * @return bool
         */
        public function isBitten() : bool {
            return $this->isBitten;
        }


    }