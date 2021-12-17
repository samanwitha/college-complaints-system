<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
      

    
   if (isset($_POST['submit']))
   {
     $name = $_POST['name'];
	 $emailid = $_POST['emailid'];
	 $facultyid = $_POST['facultyid'];
	 $password = $_POST['password'];
	 $cpassword = $_POST['cpassword'];
          $query="UPDATE faculty SET name='$name',emailid='$emailid',password='$password',cpassword='$cpassword' WHERE facultyid='$facultyid'";
		$query_run = mysqli_query($conn,$query);
            if($query_run)
		        {
			  echo "<h1> Successfully Updated.</h1>";
			  ?>
			 <a href="apage.php">BACK</a>
			 <?php	
			   }
			  
		    else
		      echo "failed";	
        }
		?>

    


