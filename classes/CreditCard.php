<?php

    class CreditCard {
        protected $iban;
        protected $cvv;
        protected $holder;
        protected $expirationDate;

        function __construct($iban,$cvv,$holder,$expirationDate)
        {
            $this -> iban = $iban;
            $this -> cvv = $cvv;
            $this -> holder = $holder;
            $this -> expirationDate = $expirationDate;
        } 
        

        /**
         * Get the value of iban
         */ 
        public function getIban()
        {
                return $this->iban;
        }

        /**
         * Set the value of iban
         *
         * @return  self
         */ 
        public function setIban($iban)
        {
                $this->iban = $iban;

                return $this;
        }

        /**
         * Get the value of cvv
         */ 
        public function getCvv()
        {
                return $this->cvv;
        }

        /**
         * Set the value of cvv
         *
         * @return  self
         */ 
        public function setCvv($cvv)
        {
                $this->cvv = $cvv;

                return $this;
        }

        /**
         * Get the value of holder
         */ 
        public function getHolder()
        {
                return $this->holder;
        }

        /**
         * Set the value of holder
         *
         * @return  self
         */ 
        public function setHolder($holder)
        {
                $this->holder = $holder;

                return $this;
        }

        /**
         * Get the value of expirationDate
         */ 
        public function getExpirationDate()
        {
                return $this->expirationDate;
        }

        /**
         * Set the value of expirationDate
         *
         * @return  self
         */ 
        public function setExpirationDate($expirationDate)
        {
                $this->expirationDate = $expirationDate;

                return $this;
        }
    }

?>