<html>
<head>
	<title>DNV COLLEGE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>
		<div id="content">
		<?php
		include 'left.php';
		?>
		
		<div id="center">
	<h1 align="center" class="welcome">Admission Page</h1><hr>
	<h4 align="left" style='margin-left:20px;'>
		<?php
		$query=mysql_query("SELECT * FROM `contents` WHERE `id`='2'");
		if ($row=mysql_fetch_assoc($query)) {
			echo $row['full_contents'];
		}
		?>
</div></h4>
        
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>