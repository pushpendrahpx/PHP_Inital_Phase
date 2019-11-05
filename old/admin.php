<?php
if($_GET['index'] == 2001){
    $mysqli = mysqli_connect("localhost","id6805265_svnit","SVNIT","id6805265_svnit_donations");
    $query = "SELECT * FROM t_users";
    $fire = $mysqli->query($query);
    if($fire){
        while($data = $fire->fetch_assoc()){
            echo "<pre>";
            print_r($data);
        }
    }
}