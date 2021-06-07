<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "TRUNCATE TABLE logins";
$result = $conn->query($sql);

$insert1 = "INSERT INTO logins values('admin', 'password');";
$result = $conn->query($insert1);
$insert2 = "INSERT INTO logins values('do_you_see_me', 'its_my_password');";
$result = $conn->query($insert2);
?>
<form action="index.php">
<button type="submit">Far back</button>
</form>