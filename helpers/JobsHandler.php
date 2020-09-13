<?php
    class JobsHandler {
        private static $instance;
        private $jobs = [];

        /**
         * Create singleton instance of JobHandler
         * @return JobsHandler
         */
        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new JobsHandler();
            }
            return self::$instance;
        }

        /**
         * JobsHandler constructor.
         * include necessary files
         */
        function __construct() {
            include("helpers/FileHandler.php");
            include("models/Job.php");
        }

        /**
         * Get all jobs from file
         * @return array
         */
        public function getAllJobs()
        {
            $entries = FileHandler::getInstance()->readFile('jobs.txt');
            foreach ($entries as $entry){
                if(empty($entry)) continue;
                $this->jobs[] = Job::fromString($entry);
            }
            return  array_filter($this->jobs);
        }

        /**
         * Filter jobs based on parameters
         * @param $parameters
         * @return array
         */
        public function filterJobs($parameters)
        {
            $parameters = array_map('strtolower', $parameters);
            $keys = array_keys ($parameters);
            $filtered = [];
            $jobs = $this->getAllJobs();
            // If we have no filter options, return all jobs
            if(count(array_filter($parameters)) == 0) {
                return $jobs;
            }
            // Begin filter logic
            foreach ($jobs as $job) {
                $match = true;
                foreach ($keys as $key) {
                    if(empty($parameters[$key])) continue;
                    // All properties need to match for job to be relevant
                    if(strpos($job->get($key),$parameters[$key]) === false ) {
                        $match = false;
                        break;
                    }
                }
                // skip over job if these conditions are met
                if(in_array($job, $filtered)) continue;
                if(!$match) continue;
                $filtered[] = $job;
            }
            return array_filter($filtered);
        }

        /**
         * Sort array of Jobs by date
         * Descending order
         * @param $arr
         * @return mixed
         */
        public function sortByDate($arr)
        {
            usort($arr, function ($a, $b) {
                return strtotime($b->getClosingDate()) - strtotime($a->getClosingDate());
            });
            return $arr;
        }

        /**
         * Validate job post
         * @param $values
         * @return array
         */
        public function validateJobListing($values)
        {
            $errors = [];
            $keys = array_keys ($values);
            // Check all form fields are good
            if(count($keys) != 8 && count($keys) != 9) {
                $errors[] = "invalid_data";
            }
            // Check if any are empty
            foreach ($keys as $key){
                if (empty($values[$key])) {
                    $errors[] = "invalid_data";
                    break;
                }
            }
            // Since we are using a message bag paradigm, we need to check isset and empty, since it's a possible outcome.
            // Check date format
            if(isset($_POST['closingDate']) && !empty($_POST['closingDate'])) {
                if(!preg_match("/\d{2}\/\d{2}\/\d{2}/", $_POST['closingDate'])){
                    $errors[] = "invalid_date";
                }
            }
            // Check position id uniqueness
            if(isset($_POST['posId']) && !empty($_POST['posId'])) {
                if ($this->getJobByPositionId($_POST['posId']) != null) {
                    $errors[] = "posid_not_unique";
                }
            }
           return array_filter($errors);

        }

        /**
         * Build object from form and save to file
         * @param $values
         */
        public function buildAndSaveObjectFromForm($values) {
            $job = new Job();
            $keys = array_keys ($values);
            foreach ($keys as $key) {
                $job->set($key, $values[$key]);
            }
            FileHandler::getInstance()->writeFile("jobs.txt", $job);
        }

        /**
         * Get Job by position id.
         * @return Job|null
         */
        public function getJobByPositionId($positionId)
        {
            $jobs = $this->getAllJobs();
            foreach ($jobs as $job) {
                if(strcmp($job->getPosId(),$positionId) === 0) {
                    return $job;
                }
            }
            return null;
        }

        /**
         * Log recent search term to file
         * @param $searchTerm
         */
        public function logRecentSearch($searchTerm) {
            // Don't log empty strings
            if (empty($searchTerm)) return;
            // Don't log any other variation of the same term
            if (in_array(strtolower($searchTerm), FileHandler::getInstance()->readFile('recent_searches.txt'))) return;
            FileHandler::getInstance()->writeFile("recent_searches.txt", $searchTerm.PHP_EOL);
        }

        /**
         * Get Recent Searches
         * @return array
         */
        public function getRecentJobSearches() {
            return array_filter(array_slice(FileHandler::getInstance()->readFile('recent_searches.txt'),0,4));
        }
    }