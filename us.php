
 <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
       if (isset($_POST['submit']))
        {
		$rollno = $_POST['rollno'];	
        $status = $_POST['status'];
		$query="UPDATE complaint SET status='$status' WHERE rollno='$rollno'";
		$query_run = mysqli_query($conn,$query);
            if($query_run)
		       //{if($run)
			   {
			  echo "<h1> Successfully Updated.</h1>";
			  ?>
			 <a href="fvc.php">BACK</a>
			 <?php	
			   }
			  // }
		    else
		      echo "failed";	
        }
		?>

    









