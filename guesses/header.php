<!DOCTYPE html>
<html>
<head>
	<title>Vincween</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/function.js"></script>
</head>
<body>
<div id="header">
	<div class="content">
		<a href="index.php" class="logo">
			<img src="images/logo.png" alt="logo"></a>
		<ul class="nav nav-pills">
			<li>
				<a href="index.php" class="selected">台词</a>
			</li>
			<li>
				<a href="sound.php">声音</a>
			</li>
			<li>
				<a href="picture.php">图片</a>
			</li>
		</ul>
	</div>
	<div class="join">
		<ul class="nav nav-pills">
			<?php 
			session_start();
			if ( ! isset($_SESSION['view']) )
			{
				include('viewer.php');
			}
			else
			{
				include('user.php');
			}
			?>
			<!--
			<li>
				<a href="#" onclick="register()" data-toggle="modal" data-target="#register">注册</a>
			</li>
			<li>
				<a href="#" onclick="login()"  data-toggle="modal" data-target="#login">登陆</a>
			</li>-->
		</ul>
	</div>
</div>
