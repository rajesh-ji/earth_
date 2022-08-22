<?php
    $servername = "localhost";
	$username ="root";
	$password ="";
	$dbname ="em";
	
	$conn = mysqli_connect($servername,$username, $password, $dbname);
	if(!$conn){
		die("unsuccessfull connection :".mysqli_connect_error() );
		echo "no server connect";
    }else{
	session_start();
}
?>