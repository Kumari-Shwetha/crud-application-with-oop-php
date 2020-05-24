<?php	
    session_start(); 		
    class DbConfig
    {
        private $host="sql308.epizy.com";
        private $username="epiz_25834958";
        private $password="xeoeI4jCr19po9r";
        private $database="epiz_25834958_user";

        protected $connection;

        public function __construct()
        {
            if(!isset($this->connection))
            {
                $this->connection=new mysqli($this->host,$this->username,$this->password,$this->database);

                if(!$this->connection)
                {
                    echo "Cannot connect to database";
                    exit;

                }
		
            }
	        return $this->connection; 
        }

    }

?>