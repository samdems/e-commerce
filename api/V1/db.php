<?php
/**
* @param the database control class
*/
class DB
{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "web";


	public $conn;

	function __construct()
	{
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		}
	}

	function getData($id1,$id2 , $table){
		$query = "SELECT * FROM $table where id$table>$id1 limit $id2 ";
		$results = $this->conn->query($query);
		return mysqli_fetch_all($results);
	}

	function close(){
		$conn->close();
	}

}


?>