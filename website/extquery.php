<?php

    session_start();
    $redirecturl = "login.php";
    if ($_SESSION['access']==1){

    	
    	$row_count = 0;
    	$con=mysqli_connect("localhost","torpe","VkcgGRzy","udb_torpe");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

         

          //echo $result;
          //$num_items = mysqli_fetch($result);
          if($_GET['q']=="count"){
          	$result= mysqli_query($con,"SELECT * FROM Items");
          	if($row_count = $result->num_rows){
          		echo $row_count;

          	}

          }

          if($_GET['q']=="list"){
          	$result= mysqli_query($con,"SELECT * FROM Items ORDER BY `pid` DESC LIMIT 5");
          	
          	for($i=0; $i<5; $i++){
          		$row = mysqli_fetch_array($result);
              echo "<table width='400px'  style='margin-top: 5px; margin-bottom:5px;'>";
              echo "<tr>";
                      echo "<th style='text-align: left;'>".$row['pid']. ". ". $row['itemname']." ( ".$row['price']." €"." )</th>";
                      echo "<th style='text-align: right;'>". $row['category']."</th>";

              echo "</tr>";
              echo "<tr>";
                       echo "<td colspan=2>".$row['description']."</td>";
                        echo "</tr>";
              echo "</table>";

          	}
          	
          }

          //if($_GET['q']=="values"){
          	//$result->fetch_array
          //}
          
          

          mysqli_close($con);


    }else{
    	echo "Not Logged in";
    }





?>