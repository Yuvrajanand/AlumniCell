<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'alumcell2K15');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['roll']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	/* Still some error here, no idea what */
	$query = mysql_query("SELECT *  FROM login where Roll = '$_POST[roll]' AND pass = '$_POST[pass]'") or die(mysql_error());
	echo $query;
	$row = mysql_fetch_array($query);
	if(!empty($row['roll']) AND !empty($row['pass']))
	{
		$_SESSION['roll'] = $row['pass'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
