<?php
function authenticate($user, $password) {
	$ldap_host = "jacobs.jacobs-university.de";

	$ldap = ldap_connect($ldap_host);

	if($bind = @ldap_bind($ldap, $user."@jacobs.jacobs-university.de", $password)) {
			return true;
	} 
	else {
		$_SESSION['user'] = "";
		$_SESSION['access'] = "0";
		return false;
	}
}

$user = $_POST["username"];
$password = $_POST["password"];

if (authenticate($user, $password) && $user != "" && $password != "") {
	// establish session variables
	session_start();
	$_SESSION['user'] = $user;
	$_SESSION['access'] = "1";

	//echo $user . ", you are now logged in!";
	//header("Location: index.php");
	//exit;
	include("index.php");
}
else {
	// reset session variables
	$_SESSION['user'] = "";
	$_SESSION['access'] = "0";

	header("Location: login.php");
	echo "Login failed!";
	exit;
}
?>