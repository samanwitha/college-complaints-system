<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
    
     	if (isset($_POST['submit']))
        {
		$rollno = $_POST['rollno'];	
        $sugg = $_POST['sugg'];
		$query="insert into suggest1 VALUES('$rollno','$sugg')"; 
		$query_run = mysqli_query($conn,$query);
            if($query_run)
		      
			   {
			  echo "<h1> Successfully Submitted.</h1>";
			  
			   }
			  
		    else
		      echo "failed";	
              ?>
			 <br><br><br><a href="fpage.php">BACK</a>
			 <?php	
		}


?>