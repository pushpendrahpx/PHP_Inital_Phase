<?php
if($_POST && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['department'])){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];

	$name = addcslashes($name,"'");
	$name = addcslashes($name,'"');

	$phone = addcslashes($phone,"'");
	$phone = addcslashes($phone,'"');

	if((strlen($name) >= 3) && (strlen($phone) == 10)){
		$mysqli = mysqli_connect("localhost","id6805265_svnit","SVNIT","id6805265_svnit_donations");
        $query = "SELECT * FROM t_users WHERE phone = '$phone'";
        $fire = $mysqli->query($query);
        if($fire && $fire->num_rows > 0){
            
		$query = "INSERT INTO t_users (name,phone,branch) VALUES ('$name','$phone','$department') ";
		$fire = $mysqli->query($query);
		if($fire){
			header("location:success.php");


		}else{
			echo "<h1>error - 3 ( <bold>Mobile Number may be registered) </bold><br />Interested in Hacking !!</h1><br /><h1>Contact - +91-9327046282</h1>";
		}
        }

	}else{
		echo "<h1>error - 2</h1>";
	}

}else{
	echo "<h1>error - 1</h1>";
}