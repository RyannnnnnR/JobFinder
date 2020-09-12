<?php
    class Job {
        /**
         * @var string
         */
        private $posId;
        private $jobTitle;
        private $description;
        private $fullTime;
        private $applicationBy;
        private $closingDate;
        private $location;


        /**
         * Get the value of posId
         *
         * @return  string
         */ 
        public function getPosId()
        {
                return $this->posId;
        }

        /**
         * Set the value of posId
         *
         * @param  string  $posId
         *
         * @return  self
         */ 
        public function setPosId(string $posId)
        {
                $this->posId = $posId;

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
         * Get the value of fullTime
         */ 
        public function getFullTime()
        {
                return $this->fullTime;
        }

        /**
         * Set the value of fullTime
         *
         * @return  self
         */ 
        public function setFullTime($fullTime)
        {
                $this->fullTime = $fullTime;

                return $this;
        }

        /**
         * Get the value of applicationBy
         */ 
        public function getApplicationBy()
        {
             return $this->applicationBy;
        }

        /**
         * Set the value of applicationBy
         *
         * @return  self
         */ 
        public function setApplicationBy($applicationBy)
        {
                $this->applicationBy = $applicationBy;

                return $this;
        }

        /**
         * Get the value of closingDate
         */ 
        public function getClosingDate()
        {
                return $this->closingDate;
        }

        /**
         * Set the value of closingDate
         *
         * @return  self
         */ 
        public function setClosingDate($closingDate)
        {
                $this->closingDate = $closingDate;

                return $this;
        }

        /**
         * Get the value of location
         */ 
        public function getLocation()
        {
                return $this->location;
        }

        /**
         * Set the value of location
         *
         * @return  self
         */ 
        public function setLocation($location)
        {
                $this->location = $location;

                return $this;
        }

        public function __toString()
        {
            return "$this->posId,$this->jobTitle,$this->description,$this->closingDate,$this->location,$this->fullTime,$this->applicationBy";
        }

        /**
         * @return mixed
         */
        public function getJobTitle()
        {
            return $this->jobTitle;
        }

        /**
         * @param mixed $jobTitle
         */
        public function setJobTitle($jobTitle)
        {
            $this->jobTitle = $jobTitle;
            return $this;
        }


    }