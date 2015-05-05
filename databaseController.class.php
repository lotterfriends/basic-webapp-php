<?php 

class DatabaseController {
	
	public $connection = null;
	static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __clone(){}
    private function __construct(){}


	public function openConnection() {
		// todo: move to config file
		$sql_host = "";
		$sql_dbname = "";
		$sql_user = "";
		$sql_passwort = "";

		$this->connection = new mysqli($sql_host, $sql_user, $sql_passwort, $sql_dbname);
		if ($this->connection->connect_error) {
		    echo('Connect Error (' . $this->connection->connect_errno . ') '. $this->connection->connect_error);
		}
	}


	public function closeConnection() {
		$this->connection->close();
	}

	public function query($query) {
		$this->connection->real_query($query);
	}

	public function select($query) {
		$this->query();
		$storeResult = $this->connection->store_result();
		$setArray = [];
		$i = 0;
		while ($row = $storeResult->fetch_assoc()) {
		    $setArray[$i] = $row;
		    $i++;	
		}
		return $setArray;
	}
}
