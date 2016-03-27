<?php
require('connect.php');
$did=$_GET['id'];
mysql_query("DELETE FROM comments WHERE id='$did']");
header("location: index.php");
?>