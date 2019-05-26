<?php 

include_once('class.database.php');

class ManageTodo{
	public $link;

	public function __construct(){
		$db_connection = new dbConnection();
		$this->link = $db_connection->connect();

		return $this->link;

	}
	public function createTodo($username,$title,$description,$due_date,$created_on,$status)
	{
		$query = $this->link->prepare("INSERT INTO todo (username,title,description,due_date,created_on,status) VALUES(?,?,?,?,?,?)");
		$values = array($username,$title,$description,$due_date,$created_on,$status);
		$query->execute($values);
		$counts = $query->rowCount();
		return $counts;
	}
	public function ListTodo($username,$status=null)
	{
		if(isset($status))
		{
			$query = $this->link->query("SELECT * FROM todo WHERE username = '$username' AND status='$status'");
		}
		else
		{
			$query = $this->link->query("SELECT * FROM todo WHERE username = '$username'");
		}
		$counts = $query->rowCount();
		if($counts >= 1)
		{
			$result = $query->fetchAll();
		}
		else
		{
			$result = $counts;
		}
		return $result;
	}
}