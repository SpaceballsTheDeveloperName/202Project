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
<link rel="stylesheet" href="/SiteCSS/myStyle.css">
</head>
<body>
<h2>Thank You, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
<p>
You have successfully logged out.
</p>
</body>
</html>
<?php
}
?>