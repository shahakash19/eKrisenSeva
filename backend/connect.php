<?php
$serverName = "localhost";                                        //server name
$userName = "root";                                              //username phpmyadmin
$pass = "";                                                     //password for database
$dbName = "SakecConnect2019";                                        //database name
$con = mysqli_connect($serverName,$userName,$pass,$dbName);	  // to connect database
	if(!$con)
	{
		echo "".mysql_error($con);                          //display error if connetion is not set
	}
?>
