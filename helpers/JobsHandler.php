<?php
    class JobsHandler {
        private static $instance;
        private $jobs = [];

        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new JobsHandler();
            }
            return self::$instance;
        }
        function __construct() {
            include("helpers/FileHandler.php");
            include("models/Job.php");
        }
        public function getAllJobs()
        {
            $entries = FileHandler::getInstance()->readFile('jobs.txt');
            foreach ($entries as $entry){
                $this->jobs[] = Job::fromString($entry);
            }
            return  $this->jobs;
        }
//        /**
//         * title=hello
//         * location=vic
//         * closingDate=2020-09-12&
//         * position=0
//         * &contract=1
//         * delivery[]=mail
//         * delivery[]=post
//         */
        /**
         * @param $parameters
         */
        public function filterJobs($parameters)
        {
            $parameters = array_map('strtolower', $parameters);
            $keys = array_keys ($parameters);
            $filtered = [];
            $jobs = $this->getAllJobs();
            foreach ($jobs as $job) {
                foreach ($keys as $key) {
                    if($job->get($key) !=  $parameters[$key]){
                       continue;
                    }
                }
                $filtered[] = $job;

            }
            return $filtered;
        }

        /**
         * @return Job|null
         */
        public function getJobByPositionId($positionId): ?Job
        {
            $jobs = $this->getAllJobs();
            foreach ($jobs as $job) {
                if(strcmp($job->getPosId(),$positionId) === 0) {
                    return $job;
                }
            }
            return null;
        }
        public function getRecentJobSearches(): array {
            return FileHandler::getInstance()->readFile('recent_searches.txt');
        }
    }