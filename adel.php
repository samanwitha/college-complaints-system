<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
       if (isset($_POST['submit']))
        {
		$rollno = $_POST['rollno'];	
	  $query="DELETE FROM complaint WHERE rollno='$rollno'";
	  $query_run = mysqli_query($conn,$query);
            if($query_run)
			{
				 echo "<h1> Successfully Deleted.</h1>";
			  ?>
			 <a href="apage.php">BACK</a>
			 <?php	
			   }
			  
		    else
		      echo "failed";	
        
		}



?>
