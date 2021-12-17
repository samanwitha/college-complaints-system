
 <?php
    session_start();
	  $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
	  $conn = mysqli_connect($servername, $username, $password,$dbname);
	  
		  if (isset($_POST['submit']))
   {
        $x=$_POST['adminid'];
		$y=$_POST['password'];
		$query=mysqli_query($conn,"select * from admin where adminid='$x' and password='$y';");
		$query_run=mysqli_num_rows($query);
                if($query_run==1) 
				{ 
			           $_SESSION['x']=1;
			           header('location:apage.php');
		    }
		elseif ($query_run==0)
		{
			echo '<script language="javascript">';
            echo 'alert("Invalid Credentials")';
            echo '</script>';
		}
        else	
         header('location:index.html');			
   }
?>
 

 

