<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include_once("config.php");
$conn = db();




$sql = "SELECT id, seller, price, rank FROM listings WHERE forsale=1 ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
if($numrows > 0){
	while($row = mysqli_fetch_array($result)){
 
			echo '<div id="listing">';
 
 
			echo "<img src='images/ranks/".$row['rank'].".png'>";
			echo "<p>Seller: ".$row['seller']."</p>";
			echo "<p>Price: $".$row['price']."</p>";
			$listingid = $row['id'];
			echo $listingid;
			echo "<form method='post' action='deletebutton.php'> <button type='submit' name='delete' value='".$listingid."|listings' class='glyphicon glyphicon-trash'></button> </form>";
			echo "<form method='post' action='buybutton.php'> <button type='submit' name='buy' value='".$listingid."|listings' class='glyphicon glyphicon-shopping-cart'></button> </form>";


			echo "</div>";
			
		}
	}
	
			
			
mysqli_close($conn);
?>

</body>
</html>