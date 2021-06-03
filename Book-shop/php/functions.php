<?php

	session_start();

	include('connect.php');
	$name='';
	$username='';
	$mail='';
	$book_name='';
	$author='';
	$category='';
	$error=array();

	function escape($value){
		global $connect;
		return mysqli_real_escape_string($connect,trim($value));
	}

	function getuserid($getid){
		global $connect;
		$query="select * from user where userid='$getid'";
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

		if($password!=$con_pass){
			array_push($error, 4);
		}
		else if(strlen($password)<7){
			array_push($error, 5);
		}
		elseif (preg_match("/&/", $password) || preg_match("/</",$password) || preg_match("/>/", $password) || preg_match('\"\/', $password)) {
			array_push($error, 7);
		}
		else{
			$query="select userid from user where Username='$username' Limit 1";
			$data=mysqli_query($connect,$query);

			if(mysqli_num_rows($data)==1) {
				array_push($error, 6);
			}
		}
		if(empty($error))	{

			if(isset($_POST['user_type']))	{
				
				$user_type=escape($_POST['user_type']);
				$query="insert into user (Name,Username,Mail,User_type,Password) values('$name','$username','$mail','$user_type','$password')";
				$data=mysqli_query($connect,$query);
				$getid=mysqli_insert_id($connect);
				$_SESSION['user']=getuserid($getid);
				if($_SESSION['user']['User_type']=='admin')	{
					header('location: ../admin_home.php');
				}
				else  {
					header('location: ../user_home.php');
				}
			}
			else  {
				$password=md5($password);
				$query="INSERT INTO user (Name,Username,Mail,User_type,Password) VALUES('$name','$username','$mail','user','$password')";
				$data=mysqli_query($connect,$query);
				$getid=mysqli_insert_id($connect);
				$_SESSION['user']=getuserid($getid);
				header('location: ../user_home.php');
			}
		}
	}

	function login()	{

		global $connect,$username,$error;

		$username=escape($_POST['username']);
		$password=escape($_POST['pass']);
		$password=md5($password);
			$query="select * from user where Username='$username' and Password='$password'";
			$data=mysqli_query($connect,$query);

			if(mysqli_num_rows($data)==1) {
				$log_in=mysqli_fetch_assoc($data);
				$_SESSION['user']=$log_in;
				if($_SESSION['user']['User_type']=='admin')	{
					header('location: ../admin_home.php');
				}
				else  {
					header('location: ../user_home.php');
				}
			}
			else {
				array_push($error, 8);
			}
	}

	function show_error()	{
		global $error;
		if(!empty($error))	{
			foreach ($error as $val) {
				if($val==4 || $val==5 || $val==7)	{
					
				}
				else if($val==6){
					echo "<script type='text/javascript' src='../../javascript/username_exist.js'></script>";
				}
				else {
					echo "<script type='text/javascript' src='../../javascript/username.js'></script>";
				}
			}
		}
	}

	function addbook()	{

		global $connect,$book_name,$author,$category;
		$book_name=escape($_POST['book_name']);
		$author=escape($_POST['author']);
		$category=escape($_POST['category']);
		$price=escape($_POST['price']);

		$target="../image/";
		$filename=$_FILES['pic']['name'];
		$targetfile=$target.basename($_FILES['pic']['name']);
		$extension=strtolower(pathinfo($targetfile,PATHINTO_EXTENSION));
		$check=getimagesize($_FILES['pic']['tmp_name']);

		if($check!=false)	{

			if(!file_exists($targetfile))  {
				$var=move_uploaded_file($_FILES['pic']['tmp_name'], $targetfile);
			}

			$query="INSERT INTO $category(Book_name,Author,Price,Cover,Summary) VALUES('$book_name','$author','$price','$filename','')";
			$data=mysqli_query($connect,$query);
		}

	}

	function display($category)
	{
		global $connect;
		$pic = array();
		$query="SELECT Cover, Author, Price, Id from $category";
		$data=mysqli_query($connect,$query);
		while ($val=mysqli_fetch_assoc($data)) {
			array_push($pic,array("../image/".$val['Cover'],$val['Author'],$val['Price'],$val['Id']));
		}
		return $pic;

	}

	if($_POST['+add'])	{
		addbook();
	}

	function isloggedin()	{
		if(isset($_SESSION['user']))	{
			return true;
		}
		else {
			return false;
		}
	}

	function isAdmin(){
		if(isset($_SESSION['user']) && $_SESSION['user']['User_type']=='admin')	{
			return true;
		}
		else  {
			return false;
		}
	}

	function addTOCart() {
		//global $connect;
	}

	if(isset($_POST['register']))	{
			register();
	}

	if(isset($_POST['login']))	{
		
				login();
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
	}

	/*if (isset($_POST['add_to_cart'])) {

		if(!isloggedin()) {
				header('location: login_register/login.php');
		}
		else {
			if($_SESSION['user']['User_type']=='admin')	{
					header('location: admin_home.php');
			}
			else  {
				header('location: user_home.php');
			}
			addTOCart();
		}
	}*/


?>