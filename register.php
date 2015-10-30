
<?php
 
 error_reporting(0);
 mysql_connect("localhost", "root", "");
 mysql_select_db("rk");

$firstname = '';
$lastname = '';
$username = '';
$passname = '';

if (!empty($_POST))
{
	$firstname = $_POST ['f_name'];
	$lastname = $_POST ['l_name'];
	$username = $_POST ['u_name'];
	$passname = $_POST ['pass'];

	mysql_query("INSERT INTO log_in (first_name, last_name, username, password) VALUES ('$firstname','$lastname','$username','passname')");
}


 ?>

<!DOCTYPE html>
<html>
<head>
<title> Registration </title>

<style type="text/css">
	.form-group {
		padding:5px;
		font-style: italic;
	}

	.form-group label {
		display:inline-block;
		width:100px;
		color: red;
		font-weight: bold;
		
	}

	#header h3{
		padding: 30px;
		margin: 0;
		position: relative;
		left:70px;
	}

</style>
</head>

<body>

	<div id = 'header'>
		<h3>Registration</h3>
	</div>

<form method = "post" action = "register.php">
	<div class="form-group">
		<label>First Name:</label> 
		<input type = "text" name = "f_name" value = "<?php echo $firstname; ?>">
	</div>

	<div class="form-group">
		<label>Last Name:</label>  
		<input type = "text" name = "l_name" value = "<?php echo $lastname; ?>"><br>
	</div>

	<div class="form-group">
		<label>Username:</label>
		<input type = "text" name = "u_name" value = "<?php echo $username; ?>"><br>
	</div>

	<div class="form-group">
		<label>Password:</label>
		<input type = "text" name = "pass" value = "<?php echo $passname; ?>"><br>
	</div>

	<br>

	<input type = "submit"><br>




</body>


</html>