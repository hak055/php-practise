<?php 
	include_once('libs/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light">
  		<a class="navbar-brand" href="/">tutlage</a>
  		<a href="logout.php" class="nav justify-content-end">Logout</a>
  	</nav>
	

			<div id="sidebar">
				<ul>
					<li><a href="index.php?label=inbox"><i class="icon-book"></i>Inbpx</a></li>
					<li><a href="index.php?label=read_later"><i class="icon-book"></i>Read Later</a></li>
					<li><a href="index.php?label=important"><i class="icon-book"></i>Important</a></li>
				</ul>				
			</div>
