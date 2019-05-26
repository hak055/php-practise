<?php 

include_once('classes/class.ManageTodo.php');
include_once('session.php');


$init = new ManageTodo();


if(isset($_GET['label']))
{
	$status = $_GET['label'];
	$list_todo = $init->ListTodo($session_name,$status);
}
else
{
	$list_todo = $init->ListTodo($session_name);
}

return $list_todo;