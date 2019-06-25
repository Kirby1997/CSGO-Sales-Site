<?php

require_once("config.php");
if(isLogged()){
	
	header('Location: index.php');
	
}
//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$email = $_POST['email'];
		
		$password = $_POST['password'];
	
		$usercheck = "SELECT * FROM accounts WHERE email='$email' LIMIT 1";
		$conn = db();
		$result = mysqli_query($conn,$usercheck);
		if(mysqli_num_rows($result)>0){
			$array = mysqli_fetch_array($result);
			$salt = $array['salt'];
			$password = pwhash($password,$salt);
			$checkpassword = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
			$passcheck = mysqli_query($conn,$checkpassword);
		
			if(mysqli_num_rows($passcheck)>0){
			
				$id = $array['id'];
				$email = $array['email'];
				$username = $array['username'];
		

			
				$_SESSION['id']=$id;
				$_SESSION['email']=$email;
				$_SESSION['username']=$username;
			
			
			
			}
		
		
		
			$token = sha1(uniqid($id, true));
			setcookie("token", "$token", strtotime(' +30 days'), "/" , "", "", TRUE);
			$tokentoserver = "UPDATE accounts SET logintoken ='".$token."' WHERE id=$id";
			mysqli_query($conn,$tokentoserver);
		
		
		
		
		
			$userstats = "SELECT * FROM userStats WHERE id='".$id."'";
			$getuserstats = mysqli_query($conn,$userstats);
			if(mysqli_num_rows($getuserstats)>0){
			$array2 = mysqli_fetch_array($getuserstats);
		
		
			$rank = $array2['rank'];
			$picture = $array2['picture'];
			$balance = $array2['balance'];
			$sold = $array2['sold'];
			$bought = $array2['bought'];
		
		
			$_SESSION['rank']=$rank;
			$_SESSION['picture']=$picture;
			$_SESSION['balance']=$balance;
			$_SESSION['sold']=$sold;
			$_SESSION['bought']=$bought;
		
		
		
		}
	
	
			mysqli_close($conn);
		
			header("location: index.php");
		
		} else {
		
			//no user found
		
		}
	
	
	
	
	}


?>