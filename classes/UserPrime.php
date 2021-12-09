<?php
    class UserPrime extends User {
        private $isActive;
        private $subscriptionDate;
        private $couponPointCounter;
        private $primeVideoData;
        private $primeTwichData;
    
        //function __construct($isActive, $subscriptionDate, $couponPointCounter, $primeVideoData, $primeTwichData)
        function __construct($userData, $userPrimeData)
        {
            parent::__construct(
                $userData["name"],
                $userData["surname"],
                $userData["address"],
                $userData["creditCard"]
            );
            $this->isActive = true;
            $this->subscriptionDate = $userPrimeData["subscriptionDate"];
            $this->couponPointCounter = $userPrimeData["couponPointCounter"];
            $this->primeVideoData = $userPrimeData["primeVideoData"];
            $this->primeTwichData = $userPrimeData["primeTwichData"];
        }

        public function setActive($isActive){
            $this->isActive = $isActive;
        }
        public function setSubscriptionDate($subscriptionDate){
            $this->subscriptionDate = $subscriptionDate;
        }
        public function sumCouponPointCounter($newPoints){
            $this->couponPointCounter += $newPoints;
        }
        public function setPrimeVideoData($primeVideoData){
            $this->primeVideoData = $primeVideoData;
        }
        public function setPrimeTwichData($primeTwichData){
            $this->primeTwichData = $primeTwichData;
        }
        public function getPrimeStatus(){
            return $this->isActive;
        }
        public function getSubscriptionDate(){
            return $this->subscriptionDate;
        }
        public function getCouponPointCounter(){
            return $this->couponPointCounter;
        }
        public function getPrimeVideoData(){
            return $this->primeVideoData;
        }
        public function getPrimeTwichData(){
            return $this->primeTwichDatac;
        }
    }


?>