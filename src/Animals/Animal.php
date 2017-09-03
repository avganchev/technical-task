<?php

    namespace AmadeusZoo\Animals;

    use AmadeusZoo\Interfaces\EatableInterface;
    use AmadeusZoo\Traits\OutputTrait;

    /**
     * @package AmadeusZoo\Animals
     * @author Anatolii Ganchev <ganchclub@gmail.com>
     */
    abstract class Animal implements EatableInterface {

        use OutputTrait;

        /**
         * @var string
         */
        protected $name;

        /**
         * @var string
         */
        protected $type;

        /**
         * Animal constructor.
         *
         * @param string $name
         *
         */
        public function __construct(string $name) {
            if ($name === '') {
                throw new \InvalidArgumentException('Animal name can\'t be empty');
            }
            $this->name = $name;
            $this->type = (new \ReflectionClass(static::class))->getShortName();
        }


        public function eat() {
            $this->renderMessage('eating');
        }

        public function behave() {
            $this->eat();
        }


        /**
         * @param string $message
         *
         */
        protected function renderMessage(string $message)  {
            $this->render($this->type . ' ' . $this->getName() . ' ' . $message);
        }

        /**
         * @return string
         */
        public function getName() : string {
            return $this->name;
        }

        /**
         * @return string
         */
        public function getType() : string {
            return $this->type;
        }

    }