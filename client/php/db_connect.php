<?php
    // CAH Server
	//$username = "ar894497";
    //$password = "#m2UdrQdbRNtt7ZSn";
    //$database = "ar894497";

    // Local Server
	//$username = "root";
	//$password = "";
	//$database = "test";
    
    // N3XTWEB Server
    $username = 'y246omza_arjun';
    $password = ')SzM&&D{cyX=';
    $database = 'y246omza_n3xtweb';
	
	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());
?>