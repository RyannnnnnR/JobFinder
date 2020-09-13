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
                if(empty($entry)) continue;
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

        public function validateJobListing($values)
        {
            $errors = [];
            $keys = array_keys ($values);
            echo count($keys);
            // Check all are set
            if(count($keys) != 8 && count($keys) != 9) {
                $errors[] = "invalid_data";
            }
            // Check all are empty
            foreach ($keys as $key){
                if (empty($values[$key])) {
                    $errors[] = "invalid_data";
                }
            }
            // Check date format
            if(isset($_POST['closingDate']) && !empty($_POST['closingDate'])) {
                if(!preg_match("/\d{2}\/\d{2}\/\d{2}/", $_POST['closingDate'])){
                    $errors[] = "invalid_date";
                }
            }
            if(isset($_POST['posId']) && !empty($_POST['posId'])) {
                if ($this->getJobByPositionId($_POST['posId']) != null) {
                    $errors[] = "posid_not_unique";
                }
            }
           return $errors;

        }

    public function buildAndSaveObjectFromForm($values){
        $job = new Job();
        $keys = array_keys ($values);
        foreach ($keys as $key) {
            $job->set($key, $values[$key]);
        }
//        echo $job;
        FileHandler::getInstance()->writeFile("jobs.txt", $job);
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
        public function logRecentSearch($searchTerm) {
            if (empty($searchTerm)) return;
            if (in_array($searchTerm, FileHandler::getInstance()->readFile('recent_searches.txt'))) return;
            FileHandler::getInstance()->writeFile("recent_searches.txt", $searchTerm.PHP_EOL);
        }
        public function getRecentJobSearches(): array {
            return array_slice(FileHandler::getInstance()->readFile('recent_searches.txt'),0,3);
        }
    }