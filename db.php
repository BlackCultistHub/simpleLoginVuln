<html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$initsql = "CREATE TABLE IF NOT EXISTS logins(
login VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
);";
$result = $conn->query($initsql);
?>
<head>

</head>
<body link="white" vlink="white" alink="white" bgcolor="#ffffff"  background="841717.jpg">

<table align=center border=1px cellspacing=2px width=100%>
<?php


$sql = "SELECT * FROM logins where login = '".$_GET['username']."' and password = '".$_GET['password']."'";
 echo "<tr><td>".$sql."</td></tr>";
$result = $conn->query($sql);

if ($result != null)
{
	while($line = $result->fetch_row()) {

			echo "<tr>";
			echo "<td>".$line[0]."</td>";
			echo "<td>".$line[1]."</td>";
			echo "</tr>";
	}
}
?>


</table>
<form role="form" action="index.php" method="get">
	<button type="submit" class="btn btn-success rounded-0">Back</button>
</form>
<form role="form" action="cleardb.php" method="get">
	<button type="submit" class="btn btn-success rounded-0">Refresh database</button>
</form>
</body>
</html>