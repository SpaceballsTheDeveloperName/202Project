<html>
<head>
<title>Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/SiteCSS/myStyle.css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["user"].value;
  var y = document.forms["myForm"]["pass"].value;
  if (x == null || x == "") {
    alert("All fields must be filled.");
    }
  if (y == null || y == "") {
    alert("All fields must be filled.");
    return false; }
    }
</script>
</head>
<body>
<div class="container">
<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Registration Form</h3>
<form name="myForm" action="" onsubmit="return validateForm()" method="POST">
Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />
<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $connect=mysql_connect('localhost','root','MistyMountain24');
  mysql_select_db('project');
  $query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
  $numberRows=mysql_num_rows($query);
  if($numberRows==0)
  {
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";
    $result=mysql_query($sql);
    if($result)
    {
      echo "Account Created";
    }
    else
    {
      echo "Account Creation Failed.";
    }
  }
  else
  {
    echo "That username already exists. Choose another.";
  }
}
?>
</div>
</body>
</html>