<!DOCTYPE> 
<html> 
 	<head> 
 	<title> My Online Shop</title> 
 </head>
 	<link rel="stylesheet" href="styles/style.css" media="all"/>
  
<body> 
<div class="main_wrapper"> 

	<div class="header_wrapper">
		<img id="logo" src="images\logo.png">
		<img id="banner" src="images\ad_banner.png">
	</div>
 	
 	<div class="menubar"> <!--Menubar-->
<ul id="menu">
	<li><a href="#">Home</a></li>
	<li><a href="#">All Products</a></li>
	<li><a href="#">My Account</a></li>
	<li><a href="#">Sign Up</a></li>
	<li><a href="#">Contact Us</a></li>
	<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data"/>
		<input type="text" name="user_query" placeholder="Search Product"/>
		<input type="submit" name="search" value="search"/>
</ul>
</form>
	</div>
</div>
 <div class="content_wrapper">

 		<div id="sidebar"><!-- This is sidebar-->
<br>
 	 <h2><font color="white">CATEGORY</h2>

 	 	<?php
 	 	define('DB_SERVER', 'localhost');
 	 	define('DB_USERNAME', 'root');
 	 	define('DB_PASSWORD', '');
 	 	define('DB_NAME', 'ecommerce');
		
		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if ($link === false) {
		die("ERROR: Could not connect." . mysqli_connect_error());
		}
		
		$result= mysqli_query($link, "SELECT * FROM category");

		while ($row = mysqli_fetch_array($result)){
			echo "<a href='#'>" .$row['Cat_title']. "</a><br>" ;
		}

		?>
		<br>
 	 <h2><font color="white">CATEGORY</h2>

 	 	<?php
 	 	$result= mysqli_query($link, "SELECT * FROM brands");

		while ($row = mysqli_fetch_array($result)){
			echo "<a href='#'>" .$row['brand_title']. "</a><br>" ;
		}
	?>

 	</font>
 		</div>
 		<div id="content_area"><!--This is  the content area-->
 			
 		</div>


 	<div id="footer"><!-- This is footer--></div>
 </div>
</div> 	

</body>
</html>