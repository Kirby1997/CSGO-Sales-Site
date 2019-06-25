<?php

require_once("config.php");
if(isLogged()){
	 header("location:index.php");
	
}
//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		
		
		$password = $_POST['password'];
		
		
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	
		$usercheck = "SELECT email FROM accounts WHERE email='".$email."'";
		$conn = db();
		$result = mysqli_query($conn,$usercheck);
		if(mysqli_num_rows($result)>0){
			exit;
		} 
		

		
		else {
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error($conn));
}

				$salt = uniqid(mt_rand(), true);
				
				//no user found
				$password = pwhash($password,$salt);

				$sql1 = "INSERT INTO accounts (email, password, username, salt) VALUES ('$email', '$password', '$username', '$salt')";
				

				if (mysqli_query($conn, $sql1)) 
				{
						
					$sql2 = "SELECT id FROM accounts WHERE email='".$email."'";

					$result2 = mysqli_query($conn,$sql2);
					
					
					if($row1 = mysqli_fetch_array($result2)){
						$id = $row1['id'];
					
						$picture = "http://i.imgur.com/9C1mncg.png";
					
					
						$sql3 = "INSERT INTO userStats (id, picture) VALUES ('$id', '$picture')";
					
					
						mysqli_query($conn,$sql3);
					
					
					
					}			
					
				header("location: login.php");
				} 
				else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
				
		
		}
	
	}

?>