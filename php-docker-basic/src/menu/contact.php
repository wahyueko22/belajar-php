<html>
<head>
  <title>Test Website Website</title>
  <style>
	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	}

	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.topnav a.active {
	  background-color: #04AA6D;
	  color: white;
	}
</style>
</head>
<body>
	<?php include_once("../analyticstracking.php") ?>
  <div class="topnav">
	  <a href="../index.php">Home</a>
	  <a href="menu/news.php">News</a>
	  <a href="menu/contact.php">Contact</a>
	  <a href="menu/about.php">About</a>
	</div>

	<div style="padding-left:16px">
	  <h2>contact</h2>
	  <p>Some content..</p>
	</div>

</body>
</html>