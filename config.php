<?php
session_start();





	function db(){
	
		$user="sql1500369";
		$password = "dJoPCPK4I7hD";
		$dbname="sql1500369";
		$location = "lochnagar.abertay.ac.uk";
		
		$conn = mysqli_connect($location,$user,$password,$dbname);
	
		return $conn;
	}
	
	function isLogged(){
		
		
		if(isset($_COOKIE["token"])){
			$_SESSION["token"] = $_COOKIE["token"];
			$token = $_COOKIE["token"];
			$findtoken = "SELECT * FROM accounts WHERE logintoken='".$_COOKIE["token"]."'";
			$conn = db();
			


			$tokencheck = mysqli_query($conn,$findtoken);
			$detailsarray = mysqli_fetch_array($tokencheck);
		
			if(mysqli_num_rows($tokencheck)>0){
			

				$username = $detailsarray['username'];
				$id = $detailsarray['id'];
				$email = $detailsarray['email'];
				

				$_SESSION['username']=$username;
				$_SESSION['id']=$id;
				$_SESSION['email']=$email;


			}
			
			$finduserStats = "SELECT * FROM userStats WHERE id='".$id."'";
			
			
			$statscheck = mysqli_query($conn,$finduserStats);
			$statsarray = mysqli_fetch_array($statscheck);
		
			if(mysqli_num_rows($statscheck)>0){
				
			$rank = $statsarray['rank'];
			$picture = $statsarray['picture'];
			$balance = $statsarray['balance'];
			$bought = $statsarray['bought'];
			$sold = $statsarray['sold'];
		
		
			$_SESSION['rank']=$rank;
			$_SESSION['picture']=$picture;
			$_SESSION['balance']=$balance;
			$_SESSION['bought']=$bought;
			$_SESSION['sold']=$sold;

				
			}
			
			
			
			return true;
			
		}
		else {
			
			return false;
			
		}
		
	}
	function pwhash($password,$salt){
		
		$pepper = array(
			"h4UVZy6yguT6eyc3",
			"U7KuNmVVHutphmaf",
			"fGqmgvjrYwS52KgL",
			"EJAW7Nu9DFGSXsjE",
			"LmA8N2TXfxpPAnwz",
			"ZEeLC3LGsqNp5zVP",
			"PC9j8DnGahFNdvBL",
			"NVEnyzPuCSNLbyrm",
			"SSCTcdj8Wv9H3kGC",
			"5Mw6PzQrNN4NzcYM"
		);
		for($i=0;$i<10;$i++){
			$password.=$password.$salt.$pepper[$i];
			$password = hash('sha512',$password);
		}
		return $password;
	}


	?>