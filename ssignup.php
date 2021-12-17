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
	 $rollno = $_POST['rollno'];
	 $password = $_POST['password'];
	 $cpassword = $_POST['cpassword'];
	 
	 if ($password==$cpassword)
	 {
		 $query= "select * from student WHERE name='$name'";
		 $query_run = mysqli_query($conn,$query);
		 
		 if(mysqli_num_rows($query_run)>0)
		 {
			 echo "<h1>User Already Exists. Go Back and Try Again.</h1>";
		 }
	 }  
		 $query="insert into student VALUES('$name','$emailid','$rollno','$password','$cpassword')";
	     $query_run = mysqli_query($conn,$query);
		  if($query_run)
		  {
			  echo " <h1>Successfully Registered. Please Go Back and Login.</h1>";
			  ?>
			 <a href="ssignin.html">LOGIN IN</a>
			 <?php	
		  }
		  
		  
   }


?>