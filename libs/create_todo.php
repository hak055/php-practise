<?php
	include_once('classes/class.ManageTodo.php');
	$init = new ManageTodo();

	if(isset($_POST['create_todo']))
	{
		$title = $_POST['title'];
		$description = $_POST['description'];
		$due_date = $_POST['due_date'];
		$status = $_POST['label'];

		if(empty($title) || empty($due_date) || empty($status))
		{
			$error = "All fields are required";
		}
		else
		{
			$title = htmlspecialchars($title);
			$description = htmlspecialchars($description);

			$username = $session_name;

			$created_on = date("Y-m-d");
			$create_todo = $init->createTodo($username,$title,$description,$due_date,$created_on,$status);
			if($create_todo == 1)
			{
				header("location: index.php");
				// $success = 'Todo Created Successfully';
			}
			else{
				$error = 'There was an error';
			}
		}
	}?>