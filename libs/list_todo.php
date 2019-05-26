<?php 

include_once('classes/class.ManageTodo.php');
include_once('session.php');


$init = new ManageTodo();

	if(isset($_GET['edit_id']))
	{
		$edit_id = $_GET['edit_id'];
		
		$list_todo = $init->showTodo($session_name,$edit_id);

		return $list_todo;
	}
	else{
			if(isset($_GET['label']))
			{
				$status = $_GET['label'];
				$list_todo = $init->ListTodo($session_name,$status);
				return $list_todo;
			}
			else
			{
				$list_todo = $init->ListTodo($session_name);
				return $list_todo;
			}
		}

