<?php
​
class SQL{
	protected $sqlObject;
​
	public $db_connection;
​
	function __construct(){
		$this->servername = "10.100.70.70\\AKREDITASI2020";
		$this->username = "guestManPro";
		$this->password  = "Testing123";
		$this->dbname = "Akreditasi2020";
		$this->db_connection_info = array(
			"UID" => $this->username,
			"PWD" => $this->password,
			"Database" => $this->dbname
		);
	}
  
	function openConnection(){
		$this->db_connection = sqlsrv_connect($this->servername, $this->db_connection_info);
  
		if ($this->db_connection) {
			echo "Connection established.<br />";
		} else {
			echo "Connection could not be established.<br />";
			die(print_r(sqlsrv_errors(), true));
		}
	}

	function executeStoredProcedure($query, $param){
		$this->openConnection();
	​
		$nocount = sqlsrv_query($this->db_connection, "SET NOCOUNT ON");
	​
		$statement = sqlsrv_prepare($this->db_connection, $query, $param);
		$query_result = sqlsrv_execute($statement);
	​
		while ($row = sqlsrv_fetch_array($statement, SQLSRV_FETCH_NUMERIC)) {
			if ( $row === false) {
				if (($errors = sqlsrv_errors()) != null) {
					foreach ($errors as $error) {
						echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
						echo "code: " . $error['code'] . "<br />";
						echo "message: " . $error['message'] . "<br />";
					}
				}
			} 
			$result[] = $row;
		}
	​

		sqlsrv_close($this->db_connection);
		return $result;
	}
}