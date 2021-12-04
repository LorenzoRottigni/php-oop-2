<?php
    class Product{
        private $id;
        private $name;
        private $description;
        private $price;
        private $primeCouponValue;

        function __construct($id,$name,$description,$price,$primeCouponValue)
        {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->primeCouponValue = $primeCouponValue;
        }

        /**
         * Get the value of primeCouponValue
         */ 
        public function getPrimeCouponValue()
        {
                return $this->primeCouponValue;
        }

        /**
         * Set the value of primeCouponValue
         *
         * @return  self
         */ 
        public function setPrimeCouponValue($primeCouponValue)
        {
                $this->primeCouponValue = $primeCouponValue;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }
?>