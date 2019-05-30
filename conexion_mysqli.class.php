<?php
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATA_BASE', 'segurenta');
class conexion
{
	private $host;
	private $usu;
	private $pass;
	private $db;
	private $conn;
	function __construct()
	{
		$host = SERVER;
		$usu = 	USER;
		$pass = PASSWORD;
		$db = 	DATA_BASE;
	}

	public function CreateConnetion(){
		$this->conn = new mysqli("localhost", "root", "", "Base de datos");
		if ($this->conn->connect_errno) {
			die("Error al conectar a la Base de Datos : (". $this->conn->connect_errno." )". $this->conn->connect_error);
		}
	}

	public function CloseConnection(){
		$this->conn->close();
	}

	public function ExecuteQuery($sql){
		$result = $this->conn->query($sql);
		return $result;
	}

	public function GetCountAffectedRows(){		
		return $this->conn->affected_rows;
	}

	public function getRows($result){
		return $result->fetch_row();
	}

	public function SetFreeResult($result){
		$result->free_result();
	}
}
?>