<?php
	error_reporting(E_ALL);
	session_start();

	$itemname = $_POST["itemname"];
	$category = $_POST["sell_category"];
	$price = $_POST["price"] + 0;
	$seller = $_SESSION["user"];
	$email = $_SESSION["user"] . "@jacobs-university.de";
	$phone = $_POST["phone"] + 0;
	$status = 1;
	$description = $_POST["description"];

	$ldap_host = "jacobs.jacobs-university.de";
	$ldap = ldap_connect($ldap_host);
	
    echo "Searching for (sn=S*) ...";
    // Search surname entry
    $sr=ldap_search($ds, "o=My Company, c=US", "sn=S*");  
    echo "Search result is " . $sr . "<br />";

    echo "Number of entries returned is " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Getting entries ...<p>";
	
	//echo $itemname;	echo $category;	echo $price;
	//echo $seller; echo $email; echo $phone;
	//echo $status; echo $description;

  	$con = mysqli_connect("localhost","torpe","VkcgGRzy","udb_torpe");
  	// Check connection
  	if (mysqli_connect_errno())	{
	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  	mysqli_query($con,"INSERT INTO Items (itemname, category, price, seller, email, phone, status, description)
VALUES('$itemname', '$category', '$price', '$seller', '$email', '$phone', '$status', '$description')");

	mysqli_close($con);

	header("Location: buy.php");

?>