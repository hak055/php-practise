<?php 
//start session
session_start();
if(isset($_POST['register']))
{
	
	include_once('classes/class.ManageUser.php');
	$users = new ManageUsers();

	//get data from form register
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$email = $_POST['email'];
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$repassword = $_POST['repassword'];
	$date = date("Y-m-d");
	$time = date("H:i:s");

	//validate data from form
	if(empty($username) || empty($password) || empty($email) || empty($repassword))
	{
		$error = 'All fields are required';
	}
	elseif($password !== $repassword)
	{
		$error = 'Password does not match';
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$error = 'Email is not valid';
	}
	else
	{
		$check_availabilty = $users->GetUserInfo($username);
		if($check_availabilty == 0)
		{	//hashing password
			$password = md5($password);
			$register_user = $users->registerUsers($username,$email,$password,$ip_address,$time,$date);
			if($register_user == 1)
			{
				$make_sessions = $users->GetUserInfo($username);
				foreach ($make_sessions as $key => $value) {
					$_SESSION['todo_name'] = $value['username'];
					if(isset($_SESSION['todo_name']))
					{
						header("location: index.php");
					}
				}
				
			}
		}else{
			$error = 'Username already exists';
		}
	}
	
};

	if(isset($_POST['login']))
	{
		session_start();
		include_once('classes/class.ManageUser.php');

		$username = $_POST['login_username'];
		$password = $_POST['login_password'];

		if(empty($username) || empty($password))
		{
			$error = 'All fields are required';
		}
		else
		{
			$password = md5($password);
			$login_users = new ManageUsers();
			$auth_user = $login_users->LoginUsers($username,$password);

			if($auth_user == 1)
			{
				$make_sessions = $login_users->GetUserInfo($username);
				foreach ($make_sessions as $value) {
					$_SESSION['todo_name'] = $value['username'];
					if(isset($_SESSION['todo_name']))
					{
						header("location: index.php");
					}
				}
			}else{
				$error = 'invalid data';
			}
		}
	}