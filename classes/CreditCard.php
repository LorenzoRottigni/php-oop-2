<?php

    class CreditCard extends User{
        private $IBAN;
        private $CVV;
        private $expirationDate;
        private $cardHolderName;

        function __construct($IBAN,$CVV,$expirationDate,$cardHolderName)
        {
            $this->$IBAN = $IBAN;
            $this->$CVV = $CVV;
            $this->$expirationDate = $expirationDate;
            $this->$cardHolderName = $cardHolderName;
        }


        /**
         * Get the value of IBAN
         */ 
        public function getIBAN()
        {
                return $this->IBAN;
        }

        /**
         * Set the value of IBAN
         *
         * @return  self
         */ 
        public function setIBAN($IBAN)
        {
                $this->IBAN = $IBAN;

                return $this;
        }

        /**
         * Get the value of CVV
         */ 
        public function getCVV()
        {
                return $this->CVV;
        }

        /**
         * Set the value of CVV
         *
         * @return  self
         */ 
        public function setCVV($CVV)
        {
                $this->CVV = $CVV;

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

        /**
         * Get the value of cardHolderName
         */ 
        public function getCardHolderName()
        {
                return $this->cardHolderName;
        }

        /**
         * Set the value of cardHolderName
         *
         * @return  self
         */ 
        public function setCardHolderName($cardHolderName)
        {
                $this->cardHolderName = $cardHolderName;

                return $this;
        }
    }

?>