<?php
    class JobsHandler {
        private static $instance;
        private $jobs;

        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new FileHandler();
            }
            return self::$instance;
        }

        public function getAllJobs()
        {
            # code...
        }
    }