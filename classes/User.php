<?php
    class User{
        private $name;
        private $surname;
        private $address;
        private $purchaseArray = [];

        function __construct($name, $surname, $address)
        {
            $this->name = $name;     
            $this->surname = $surname;   
            $this->address = $address;          
        }

        public function setName($name){
            $this->name = $name;
        }
        public function setSurname($surname){
            $this->name = $surname;
        }
        public function setAddress($address){
            $this->address = $address;
        }
        public function setCreditCard($creditCard){
            $this->creditCard = $creditCard;
        }
        public function setPurchaseArray($purchaseArray){
            $this->purchaseArray = $purchaseArray;
        }
        public function addPurchase($import,$productName){
            $purchase = array(
                'id' => rand(1,500),
                'import' => $import,
                'date' => date('Y-m-d H:i:s'),
                'productName' => $productName
            );
            array_push($this->purchaseArray, $purchase);
        }
        public function getPurchase(){
            return $this->purchaseArray;
        }
        public function getName(){
            return $this->name;
        }
        public function getSurname(){
            return $this->surname;
        }
        public function getAddress(){
            return $this->address;
        }
        public function getCreditCard(){
            return $this->creditCard;
        }
        public function getPurchaseArray(){
            return $this->purchaseArray;
        }

    }
?>
