<?php

/**
 * Class dbConnect
 */
class dbConnect {

	protected $pdo;
	protected $host = 'base.web-republic.de';
	protected $username = 'db13184950-lukas';
	protected $password = 'risenrp!';
	protected $dbname = 'db13184950-own';
	private $dataset = array();

	/**
	 * dbConnect constructor.
	 */
	public function __construct() {
		$this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
	}

	/**
	 * @param $username
	 * @return int
	 */
	public function loginUser($username) {
		$statement = $this->pdo->prepare("SELECT * FROM workers WHERE username LIKE :userID");
		$statement->execute(array(':userID' => "$username"));
		$row = $statement->fetch();

		if (!empty($row)) {
			return $row["ID"];
		} else {
			return NULL;
		}

	}

	/**
	 * @param $userid
	 * @return bool
	 */
	public function loginAdmin($userid) {
		$statement = $this->pdo->prepare("SELECT admin FROM workers WHERE ID = :userID");
		$statement->execute(array(':userID' => $userid));
		$row = $statement->fetch();
		if ($row != false && $row["admin"] == 1) {
			return true;
		} else {
			return false;
		}

	}

	/**
	 * @param $userid
	 * @return int
	 */
	public function getUserID($userid) {
		$statement = $this->pdo->prepare("SELECT ID FROM workers WHERE ID = :userID");
		$statement->execute(array(':userID' => $userid));
		$row = $statement->fetch();
		if ($row != false) {
			return $row["ID"];
		} else {
			return NULL;
		}

	}

	public function getUsername($userid){
		$statement = $this->pdo->prepare("SELECT username FROM workers WHERE ID = :userID");
		$statement->execute(array(':userID' => $userid));
		$row = $statement->fetch();
		if ($row != false) {
			return $row["username"];
		} else {
			return NULL;
		}
	}

	/**
	 * @param $kellner
	 * @param $anzahl
	 * @param $item
	 * @param $trinkgeld
	 * @param $isBarzahlung
	 */
	public function insertVerkauf($kellner, $anzahl, $item, $trinkgeld, $isBarzahlung) {
		//Prepare our statement.
		$statement = $this->pdo->prepare("INSERT INTO verkauf (verkauf_kellner, verkauf_anzahl, verkauf_item, verkauf_trinkgeld_bar, verkauf_trinkgeld_bank, verkauf_time) VALUES (:kellner,:anzahl,:item,:barzahlung,:kartenzahlung,NOW())");


		//:kellner,:anzahl,:anzahl,:barzahlung,:kartenzahlung,:datum)
		//Bind our values to our parameters (we called them :make and :model).
		$statement->bindValue(':kellner', "$kellner");
		$statement->bindValue(':anzahl', $anzahl);
		$statement->bindValue(':anzahl', "$item");

		if ($isBarzahlung) {
			$statement->bindValue(':barzahlung', $trinkgeld);
			$statement->bindValue(':kartenzahlung', 00.00);

		} else {
			$statement->bindValue(':barzahlung', 00.00);
			$statement->bindValue(':kartenzahlung', $trinkgeld);
		}

		/*
		$datum = date('Y-m-d H:i:s');
		$statement->bindValue(':datum', "$datum");
		*/

		//Execute the statement and insert our values.
		$inserted = $statement->execute();


		//Because PDOStatement::execute returns a TRUE or FALSE value,
		//we can easily check to see if our insert was successful.
		if ($inserted) {
			echo '<script> alert("insert success") </script>';
		}
	}

	/**
	 * @param $sql
	 * @return array
	 */
	public function selectAll($sql) {
		foreach ($this->pdo->query($sql) as $row) {
			array_push($this->dataset, $row);
		}
		return $this->dataset;
	}

	/**
	 * @param $sql
	 * @return mixed
	 */
	public function selectSingle($sql) {
		$statement = $this->pdo->prepare($sql);
		$statement->execute();
		$row = $statement->fetch();
		return $row;
	}

	/**
	 * @param $sql
	 * @param $username
	 * @return mixed
	 */
	public function selectSingleParam($sql, $username) {
		$statement = $this->pdo->prepare($sql);
		$statement->execute(array(':username' => $username));
		$row = $statement->fetch();
		return $row;
	}

	/**
	 * @param $sql
	 * @return array
	 */
	public function selectParam($sql) {
		echo $sql . PHP_EOL;

		$statement = $this->pdo->prepare("SELECT * FROM users WHERE vorname = :vorname AND nachname = :nachname");
		$statement->execute(array(
			':vorname' => 'Max',
			':nachname' => 'Mustermann'
		));
		while ($row = $statement->fetch()) {
			echo $row['vorname'] . " " . $row['nachname'] . "<br />";
			echo "E-Mail: " . $row['email'] . "<br /><br />";
		}
		array_push($this->dataset, $row);

		return $this->dataset;
	}


	/**
	 * @param $name
	 */
	public function __get($name) {
		// TODO: Implement __get() method.
	}

	/**
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value) {
		// TODO: Implement __set() method.
	}

	/**
	 * @return string
	 */
	public function __toString() {
		// TODO: Implement __toString() method.
		return "dbConnection";
	}


}