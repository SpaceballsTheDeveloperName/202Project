<html>
<head>
<title>Search Podcasts</title>
</head>
<p><body>
<h3>Search Podcast Details</h3>
<p>Search by keyword or name</p>
<form method="post" action="search.php?go" id="searchform">
<input type="text" name="name">
<input type="submit" name="submit" value="Search">
</form>
    <?php
    if(isset($_POST['submit']))
    {
      if(isset($_GET['go']))
      {
	if(preg_match("/[A-Z | a-z]+/", $_POST['name']))
	{
	  $name=$_POST['name'];
	  $database=mysql_connect ("localhost", "root", "MistyMountain24");
	  $mydatabase=mysql_select_db('project');
	  $getquery=mysql_query();
	}
      }
    }
    else
    {
      echo "<p>Please enter search terms</p>";
    }
    }
    ?>
</body>
</html>
</p>
