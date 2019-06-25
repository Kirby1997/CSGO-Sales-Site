<?php

require_once("config.php");
if(isLogged()){
	
	

//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$seller = $_SESSION['id'];
		
		$rank = $_POST['rank'];
		
		
		$price = $_POST['price'];
		
		
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		
		
		$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	

		$conn = db();

		

		


				$sql1 = "INSERT INTO listings (seller, rank, price, username, password) VALUES ('$seller', '$rank', '$price', '$username', '$password')";
				

				mysqli_query($conn, $sql1);
		
					
				header("location: listings.php");
	} 
}
else {
	header("location:listings.php");
	
}		
				


?>