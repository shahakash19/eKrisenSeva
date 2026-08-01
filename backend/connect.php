<?php
$serverName = "localhost";                                        //server name
$userName = "root";                                              //username phpmyadmin
$pass = "";                                                     //password for database
$dbName = "SakecConnect2019";                                        //database name
$con = mysqli_connect($serverName,$userName,$pass,$dbName);	  // to connect database
	if(!$con)
	{
		echo "".mysqli_connect_error();
	}
?>
