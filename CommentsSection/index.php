<?php
require('connect.php');
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

if($submit)
{
  if($name&&$comment)
  {
   $insert=mysql_query("INSERT INTO comments (name,comment) VALUES ('$name','$comment')");
   
  }
  else
  {
    echo "Please fill all fields";
  }
}


?>
<html>
<head>
<title>Comment Section</title>
</head>

<body>
<form action="index.php" method="POST">
<table>
<tr><td>Name:</td><td><input type="text" name="name"/></td></tr>
<tr><td colspan="2">Comment: </td></tr>
<tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment" /></td></tr>
</table>
</form>
<?php
$getquery=mysql_query("SELECT * FROM comments ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{
  $id=$rows['id'];
  $name=$rows['name'];
  $comment=$rows['comment'];
  $dellink="<a href=\"delete.php?id=" . $id . "\"> Delete </a>";
  echo $name . '<br />' . '<br />' . $comment . '<br />' . $dellink . '<br />' . '<hr width="250px" />';
}



?>
</body>
</html>