<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include_once("config.php");
$conn = db();
$q = intval($_GET['q']);
if ($_SESSION["rank"] != 2){
		header("location: index.php");
	}




$sql1="SELECT * FROM accounts WHERE id = '".$q."' LIMIT 1";
$sql2="SELECT * FROM userStats WHERE id = '".$q."' LIMIT 1";
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);

echo "<table>
<tr>
<th>User ID</th>
<th>Username</th>
<th>Email</th>
<th>Rank</th>
<th>Picture</th>
<th>Balance</th>
<th>Sold</th>
<th>Bought</th>
</tr>";
if($row1 = mysqli_fetch_array($result1)) {
    echo "<tr>";
    echo "<td>" . $row1['id'] . "</td>";
    echo "<td>" . $row1['username'] . "</td>";
    echo "<td>" . $row1['email'] . "</td>";

}




if($row2 = mysqli_fetch_array($result2)) {

    echo "<td>" . $row2['rank'] . "</td>";
    echo "<td>" . "<img height=100px width=100px src= ".$row2['picture']."" . "</td>";
    echo "<td>" . $row2['balance'] . "</td>";
    echo "<td>" . $row2['sold'] . "</td>";
	echo "<td>" . $row2['bought'] . "</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($conn);
?>

</body>
</html>