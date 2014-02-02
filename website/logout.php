<?php
session_start();

$_SESSION['user'] = "";
$_SESSION['access'] = "0";

session_destroy();

echo "You are now loogged out.";
header("Location: index.php");
exit;
?>
