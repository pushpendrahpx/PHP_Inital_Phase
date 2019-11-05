<?php

/*

BEGIN:VCARD
VERSION:3.0
N:Jio;Dad;;;
FN:Dad Jio
TEL;TYPE=CELL:+917990909281
END:VCARD

*/
$mysqli = mysqli_connect("localhost","id6805265_svnit","SVNIT","id6805265_svnit_donations");
$query = "SELECT * FROM t_users";
$fire = $mysqli->query($query);
if($fire){
	while($data = $fire->fetch_asso()){
		
		$link = "https://api.whatsapp.com/send?phone=".$data['phone']."&text=Hello Guys its Pushpendra and Vinod from Chintan Pratishthan And You'll be soon notified about books Notification";
		$iot = file_get_contents($link);
		
		echo "All Contacts Send";
	}
}else{

}