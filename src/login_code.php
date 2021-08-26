<?php

require_once('connection.php');
$id = $password = '';

$id = $_POST['staff_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM staff_member WHERE staff_id='$id' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["staff_id"];
		$password = $row["password"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
	}
	header("Location: ");
}
else
{
	echo "Invalid email or password";
}
?>