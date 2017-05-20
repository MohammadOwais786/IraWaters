<?php
	date_default_timezone_set("Asia/Kolkata");
	function connect_2_db()
	{
		$host="localhost";  
		$username="root";  
		$password="";
		$db_name="ira";
		$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
		return $con;
	}
