<?php
session_start();
if(!isset($_SESSION["sess_user"]))
{
  header("location:login.php");
}
else
{
?>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
<p>
I should probably write something here to test it.
</p>
</body>
</html>
<?php
}
?>