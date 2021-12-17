<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
    
     	if (isset($_POST['submit']))
        {
		$rollno = $_POST['rollno'];	
        $title = $_POST['title'];
	    $descr = $_POST['descr'];
	    $status = $_POST['status'];
          $query="insert into complaint VALUES('$rollno','$title','$descr','$status')";
		 // $run="insert into complaint(`status`) VALUES(NULL)";
	      $query_run = mysqli_query($conn,$query);
            if($query_run)
		       //{if($run)
			   {
			  echo "<h1> Successfully Registered.</h1>";
			  ?>
			 <a href="spage.php">BACK</a>
			 <?php	
			   }
			  // }
		    else
		      echo "failed";	
        
		}



?>

