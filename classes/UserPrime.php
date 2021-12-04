<?php
    class UserPrime extends User {
        private $isActive;
        private $subscriptionDate;
        private $couponPointCounter;
        private $primeVideoData;
        private $primeTwichData;
    
        function __construct($isActive, $subscriptionDate, $couponPointCounter, $primeVideoData, $primeTwichData)
        {
            $this->isActive = $isActive;
            $this->subscriptionDate = $subscriptionDate;
            $this->couponPointCounter = $couponPointCounter;
            $this->primeVideoData = $primeVideoData;
            $this->primeTwichData = $primeTwichData;
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