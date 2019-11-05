<?php
if($_POST && isset($_POST['name']) && isset($_POST['phone'])&& isset($_POST['department']) && isset($_POST['email']) && isset($_POST['interest']) && isset($_POST['ischecked']) && isset($_POST['rollno'])){
	require_once '../mysqli.php';
	$name = addcslashes($_POST['name'],'"');
	$name = addcslashes($name,"'");

	$phone = addcslashes($_POST['phone'], '"');
	$phone = addcslashes($phone, "'");

	$rollno = addcslashes($_POST['rollno'],'"');
	$rollno = addcslashes($rollno,'"');

	$department = addcslashes($_POST['department'],'"');
	$department = addcslashes($department,"'");

	$email = addcslashes($_POST['email'],'"');
	$email = addcslashes($email,"'");

	$interest = addcslashes($_POST['interest'],'"');
	$interest = addcslashes($interest,"'");

	$ischecked = addcslashes($_POST['ischecked'],'"');
	$ischecked = addcslashes($ischecked,"'");
	
	$lat = $_POST['lat'];
	$lon = $_POST['lon'];

	$query = "INSERT INTO Network_Student (name,phone,department,email,interest,ischecked,rollno) VALUES ('$name','$phone','$department','$email','$interest','$ischecked','$rollno')";
	$fire = $mysqli->query($query);
	session_start();
	if($fire){
		$_SESSION['ismessage'] = true;
		$_SESSION['message'] = "Registration Successfull";
		header("location:success.php");
	}else{
		$_SESSION['ismessage'] = true;
		$_SESSION['message'] = "Some Error Found , may be Some details are already filled";
		header("location:success.php");
	}   

}else{
	echo "error";
}