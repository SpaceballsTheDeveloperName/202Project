<html>
<head>
<title>Register</title>
</head>
<body>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Registration Form</h3>
<form action="" method="POST">
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
</body>
</html>