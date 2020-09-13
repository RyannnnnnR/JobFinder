<?php
    class FileHandler {
        const ROOT_DIR = "./data/assign1/";
        private static $instance = null;

        function __construct()
        {
            // Initialise directories
            $dir = "../../data/assign1";
            if(!is_dir(self::ROOT_DIR))  {
                umask(0007);
                echo self::ROOT_DIR;
                mkdir(self::ROOT_DIR, 02770, true);
            }
        }
        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new FileHandler();
            }
            return self::$instance;
        }
        public function readFile($fileName)
        {
            $fileName =  self::ROOT_DIR.$fileName;
            if(!file_exists($fileName)) return [];
            $handle = fopen($fileName, "r"); // open the file in read mode
            $contents = file_get_contents($fileName);
            $tmp = explode(PHP_EOL, $contents);
            fclose($handle);   // close the text file  
            return $tmp;
        }

        public function writeFile($fileName, $entry)
        {
            $fileName =  self::ROOT_DIR.$fileName;
            $handle = fopen($fileName, "a"); // open the file in read mode
            if(fwrite($handle, $entry) !== FALSE) {    // write string to text file
                $result = true;
            } else {
                $result = false;
            }
            fclose($handle);   // close the text file
            return $result;
        }
    }
