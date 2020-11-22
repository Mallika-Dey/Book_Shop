<?php

	session_start();

	include('../connect.php');
	$name='';
	$username='';
	$mail='';
	$error=array();

	function escape($value){
		global $connect;
		return mysqli_real_escape_string($connect,trim($value));
	}

	function getuserid($getid){
		global $connect;
		$query="select * from user where Id='$getid'";
		$data=mysqli_query($connect,$query);
		return mysqli_fetch_assoc($data);
	}

	function register(){

		global $connect,$name,$username,$mail,$error;

		$name=escape($_POST['name']);
		$username=escape($_POST['username']);
		$mail=escape($_POST['mail']);
		$password=escape($_POST['pass']);
		$con_pass=escape($_POST['con_pass']);

		if(empty($name)){
			array_push($error, 1);
		}
		else if(empty($username)){
			array_push($error, 2);
		}
		else if(empty($mail)){
			array_push($error, 3);
		}
		else if($password!=$con_pass){
			array_push($error, 4);
		}
		else{
			$query="select Id from user where Username='$username' Limit 1";
			$data=mysqli_query($connect,$query);

			if(mysqli_num_rows($data)==1){
				array_push($error, 5);
			}
		}
		if(empty($error)){

			if(isset($_POST['user_type'])){
				
				$user_type=escape($_POST['user_type']);
				$query="insert into user (Name,Username,Mail,User_type,Password) values('$name','$username','$mail','$user_type','$password')";
				$data=mysqli_query($connect,$query);
				$getid=mysqli_insert_id($connect);
				$_SESSION['user']=getuserid($getid);
				if($_SESSION['user']['user_type']=='Admin'){
					header('location: admin_home.php');
				}
				else{
					header('location: ../home.php');
				}
			}
			else{
				$query="INSERT INTO user (Name,Username,Mail,User_type,Password) VALUES('$name','$username','$mail','user','$password')";
				$data=mysqli_query($connect,$query);
				$getid=mysqli_insert_id($connect);
				$_SESSION['user']=getuserid($getid);
				header('location: ../home.php');
			}
		}
	}

	function login(){

		global $connect,$username,$error;

		$username=escape($_POST['username']);
		$password=escape($_POST['pass']);

		if(empty($username)){
			array_push($error, "Username is required");
		}

		else if(empty($password)){
			array_push($error,"Password is required");
		}

		else{

			$query="select * from user where Username='$username' and Password='$password'";
			$data=mysqli_query($connect,$query);

			if(mysqli_num_rows($data)==1){
				$log_in=mysqli_fetch_assoc($data);
				$_SESSION['user']=$log_in;
				if($_SESSION['user']['user_type']=='Admin'){
					header('location: admin_home.php');
				}
				else{
					header('location: ../home.php');
				}
			}
			else{
				array_push($error, "Wrong Username/Password");
			}
		}
	}

	function show_error(){
		global $error;
		if(!empty($error)){
			foreach ($error as $val) {
				if($val==1){
					echo "<script type='text/javascript' src='../../javascript/name.js'></script>";
				}
				else if ($val==2) {
					echo "<script type='text/javascript' src='../../javascript/username.js'></script>";
				}
				else if ($val==3) {
					echo "<script type='text/javascript' src='../../javascript/mail.js'></script>";
				}
				else if($val==4){
					echo "<script type='text/javascript' src='../../javascript/password.js'></script>";
				}
				else {
					echo "<script type='text/javascript' src='../../javascript/username_exist.js'></script>";
				}
			}
		}
	}

	function isloggedin(){
		if(isset($_SESSION['user'])){
			return true;
		}
		else {
			return false;
		}
	}

	function isAdmin(){
		if(isset($_SESSION['user']) && $_SESSION['user']['user_type']=='Admin'){
			return true;
		}
		else{
			return false;
		}
	}

	if(isset($_POST['register'])){
			register();
	}

	if(isset($_POST['login'])){
			login();
	}

	if(isset($_POST['logout'])){
		session_destroy();
		unset($_SESSION['user']);
		header('location: login.php');
	}

?>