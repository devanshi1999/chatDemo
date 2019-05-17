<?php

	include("dbconn.php");

	$query="CREATE DATABASE IF NOT EXISTS ChatDemo";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `ChatDemo`.`data` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(200) NOT NULL , `message` VARCHAR(200) NOT NULL , `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	if(!$run)
	{
		echo "error1";
	}
?>