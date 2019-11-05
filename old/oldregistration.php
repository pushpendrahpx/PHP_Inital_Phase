<?php

/*

BEGIN:VCARD
VERSION:3.0
N:Jio;Dad;;;
FN:Dad Jio
TEL;TYPE=CELL:+917990909281
END:VCARD

*/
// $mysqli = mysqli_connect("localhost","id6805265_svnit","SVNIT","id6805265_svnit_donations");
// $query = "SELECT * FROM t_users";
// $fire = $mysqli->query($query);
// if($fire){
// 	while($data = $fire->fetch_asso()){
		
// 		$link = "https://api.whatsapp.com/send?phone=".$data['phone']."&text=Hello Guys its Pushpendra and Vinod from Chintan Pratishthan And You'll be soon notified about books Notification";
// 		$iot = file_get_contents($link);
// 		print_r();
// 	}
// }else{

// }
session_start();
if($_SESSION['ismessage'] == true && isset($_SESSION['message'])){
	echo $_SESSION['message'];
	
	$_SESSION['ismessage'] = false;
	
}
if($_POST && isset($_POST['phone']) && isset($_POST['name'])){

	$name = addcslashes($_POST['name'],'"');
	$name = addcslashes($name,"'");

	$phone = addcslashes($_POST['phone'],'"');
	$phone = addcslashes($phone,"'");

	$mysqli = mysqli_connect("localhost","id6805265_svnit","SVNIT","id6805265_svnit_donations");
	
	$query = "INSERT INTO drafter (name,phone) VALUES ('$name','$phone')";
	$fire = $mysqli->query($query);
	if($fire){
		$_SESSION['ismessage'] = true;
		$_SESSION['message'] = "INSERTED '$name' with Phone '$phone'";
		header('location:oldregistration.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drafter Registration</title>
</head>
<body>
	<form method="post" action="oldregistration.php">
		<input type="text" placeholder="Full Name" name="name">
		<input type="number" maxlength="10" minlength="10" name="phone">
		<button>Submit</button>
	</form>
</body>
</html>