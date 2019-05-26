<?php 
	if(isset($_POST['edit_todo']))
	{
		include_once('classes/class.ManageTodo.php');
		include_once('session.php');
		$init = new ManageTodo();

		$username = $session_name;
		$id = $_GET['edit_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$due_date = $_POST['due_date'];
		$status = $_POST['label'];

		$edit = $init->editTodo($username,$id,$title,$description,$due_date,$status);
		if($edit){
			header("location: index.php");
		}
	}