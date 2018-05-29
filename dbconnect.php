<?php
class dbConnect{

	protected $pdo;
	protected $host = 'lukas.yourweb.de';
	protected $username = 'db13184950-lukas';
	protected $password = 'risenrp!';
	protected $dbname = 'db13184950-own';
	private $dataset = array();


	public function select($sql){
		foreach ($this->pdo->query($sql) as $row) {
			array_push($this->dataset,$row);
		}
		return $this->dataset;
	}

	public function selectParam($sql){
		echo $sql.PHP_EOL;

		$statement = $this->pdo->prepare("SELECT * FROM users WHERE vorname = :vorname AND nachname = :nachname");
		$statement->execute(array(':vorname' => 'Max', ':nachname' => 'Mustermann'));
		while($row = $statement->fetch()) {
			echo $row['vorname']." ".$row['nachname']."<br />";
			echo "E-Mail: ".$row['email']."<br /><br />";
		}
		array_push($this->dataset,$row);

		return $this->dataset;
	}


	public function __construct() {
		$this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
	}

	public function __get($name) {
		// TODO: Implement __get() method.
	}

	public function __set($name, $value) {
		// TODO: Implement __set() method.
	}

	public function __toString() {
		// TODO: Implement __toString() method.
		return "dbConnection";
	}


}