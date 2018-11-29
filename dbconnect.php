<?php
	$username = "al404705";
	$password = "1012@Lex";
	$database = "al404705";
	
	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
?>