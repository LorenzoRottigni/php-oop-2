<?php
    class User{
        private $name;
        private $surname;
        private $address;
        private $purchaseArray = [];

        function __construct($name, $surname, $address, $creditCard)
        {
            $this->name = $name;     
            $this->surname = $surname; 
            $this->address = $address;   
            $this->creditCard = new CreditCard($creditCard["iban"],$creditCard["cvv"],$creditCard["holder"],$creditCard["expirationDate"]);          

        }

        public function setName($name){
            if(is_int($name)){
                throw new Exception("its not a string");
            }else{
                $this->name = $name;
            }
            
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
            return $this->creditCard->getIban();
        }
        public function getPurchaseArray(){
            return $this->purchaseArray;
        }

    }
?>
