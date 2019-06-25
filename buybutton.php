
<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php

require_once("config.php");
if(isLogged()){
	
	

//check if post


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		
		
		
		$result = $_POST['buy'];
		$result_explode = explode('|', $result);
		$buyid = $result_explode[0];
		
	
		$markassold = "UPDATE listings SET forsale=0 WHERE id='$buyid'";
		$conn = db();
		mysqli_query($conn,$markassold);
		
		
		$getaccountdetails = "SELECT * FROM listings WHERE id=$buyid";

		if( $listingdetails = mysqli_query($conn,$getaccountdetails))
		{

		


			if( $listingarray = mysqli_fetch_array($listingdetails))
			{

				
				
				$buyer = $_SESSION['id'];
				$seller = $listingarray['seller'];
				$price = $listingarray['price'];
				$accountusername = $listingarray['username'];
				$accountpassword = $listingarray['password'];
				

				
				$updateseller = "UPDATE userStats SET balance = balance + $price , sold = sold + 1 WHERE id=$seller";
				$updatebuyer = "UPDATE userStats SET balance = balance - $price , bought = bought + 1 WHERE id =$buyer";
				
				mysqli_query($conn,$updateseller);
				mysqli_query($conn,$updatebuyer);
				
				
	
	
			
			
			//header("location: ". $_SERVER['HTTP_REFERER']);
			
			echo "<script>alert('');</script>";
			echo "<script> alert('" . $accountusername . "');</script>";
			echo "<script> alert('" . $accountpassword . "');</script>";	
			
			
			
	
			
			}
		}
	} 
				
				
		
}
		
		else{
			header("location:index.php");
			
		}
	
	

?>


</body>
</html>