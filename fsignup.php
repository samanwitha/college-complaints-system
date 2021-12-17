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
	 
	 if ($password==$cpassword)
	 {
		 $query= "select * from faculty WHERE name='$name'";
		 $query_run = mysqli_query($conn,$query);
		 
		 if(mysqli_num_rows($query_run)>0)
		 {
			 echo "<h1>User Already Exists. Please Try Again.</h1>";
			 ?>
			 <a href="fsignup.html">BACK</a>
			 <?php			 

		 }
	 }  
		 $query="insert into faculty VALUES('$name','$emailid','$facultyid','$password','$cpassword')";
	     $query_run = mysqli_query($conn,$query);
		  if($query_run)
		  {
			  echo "<h1> Successfully Registered. Please Go Back and Login.</h1>";
			  ?>
			 <a href="fsignin.html">LOGIN IN</a>
			 <?php		



		  }
		  
		  
   }
?>


