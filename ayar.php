<?php


	$host = "localhost";
	
	$user = "root";	
	$pass = "";

	$connect = mysql_connect($host,$user,$pass,false,2) or die (mysql_error());
	
	$db_select = mysql_select_db("sondakika") or die(mysql_error());
	
	mysql_query("SET NAMES 'latin5'");
	mysql_query("SET CHARACTER SET latin5");
	mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");







?>