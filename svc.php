<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   body{
    margin:0;
	background-color:#D8BFD8;
}	
   .topnav {
   height:39px;
   overflow:hidden;
   background-color: brown;
   
}

  .topnav a {
  text-decoration:none;
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding:11px;
  text-decoration: none;
  font-size: 15px;
 
}

  .topnav a:hover {
  background-color: #ddd;
  color: black;
}

  .topnav a.active {
   background-color: #4CAF50;
   color: white;
}


    header {
    padding:3px;
    height:120px;
    font-size:22px;
    color: white;
    background-color:grey;
    text-align: center;
}
   footer{
   position:fixed;
   bottom:0;
   width:100%;
   height:20px;   
   background-color:grey;
   color:white;
   text-align:center;
}
   
   
  
   span{
   
   padding :12px;
}
	li{
     margin-bottom:15px;
     font-weight:bold;
}
     section{
     padding :15px;
     margin-top:-19px;
     
}	
    section a{
    background-color: #f44336;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    color:black;
	
}   
   
</style>
</head>
<body>
<header>
   <h1>MVSR COMPLAINTS</h1>
</header>
<div class="topnav">
  <a class="active" href="index.html">HOME</a>
  <a href="abt.html">ABOUT</a>
</div>
<div align='center'>
<fieldset style="width:98%"><legend><h2>COMPLAINTS</h2></legend> 
<a href="spage.php">BACK</a><br><br>
<p>"   *  "-  PENDING ,"   P   "- PROCESSING,"   D   "- DONE</p>
 <form action="svc.php" method="POST" > 
 <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
       if (isset($_POST['submit']))
        {
		$rollno = $_POST['rollno'];	
	  $query="SELECT * FROM complaint where rollno='$rollno'";
	  $query_run = mysqli_query($conn,$query);
            if($query_run)
			{
		?>
		<table border="1">
       <tr height="90">
	 
      <th height="90" width="1%">ROLLNO</th>
      <th  width="15%">TITLE</th>
	  <th  width="40%">DESCRIPTION</th>
	  <th  width="6%">STATUS</th>
      </tr>
	  
        <?php  
		while($row = mysqli_fetch_array($query_run))
		{
              
              echo "<tr height='90'>";
              echo "<td width='10%'>" . $row['rollno'] . "</td>";
               echo "<td width='5%'>" . $row['title'] . "</td>";
			   echo "<td width='3%'>" . $row['descr'] . "</td>";
			   echo "<td width='5%'>" . $row['status'] . "</td>";
               echo "</tr>";
		}}}
    ?>
     
    </body>
    </html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 