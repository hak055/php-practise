<?php 

include_once('class.database.php');

class ManageUsers{
	public $link;

	public function __construct(){
		$db_connection = new dbConnection();
		$this->link = $db_connection->connect();

		return $this->link;

	}

	public function registerUsers($username,$password,$ip_address,$reg_time,$reg_date){
		$query = $this->link->prepare("INSERT INTO users (username,password,ip_address,reg_time,reg_date) VALUES (?,?,?,?,?)");

		$values = array($username,$password,$ip_address,$reg_time,$reg_date);
		$query->execute($values);
		$counts = $query->rowCount();

		return $counts;
	}
}

$users = new ManageUsers();
echo $users->registerUsers('Bob','bob','127.0.0.1','12:00','29-05-2019');