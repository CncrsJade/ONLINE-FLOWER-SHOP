<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

?>
<?php 

$db = new mysqli('localhost','root','','shop_db');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>