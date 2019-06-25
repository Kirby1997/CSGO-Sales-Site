<?php

require_once("config.php");
if(isLogged()){
	
	
	
}
//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
		
		
		$content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
		

		$conn = db();
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
}

		

			$sql = "INSERT INTO blogs (title, content, date) VALUES ('$title', '$content', now())";
			
			if (mysqli_query($conn, $sql)) {
			header("location: index.php");
}
			
			
			
		
		
	
	
	
	
	}


?>