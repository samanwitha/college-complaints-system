<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body{
    margin:0;
	background-color:#ff99ff;
}	
   .topnav {
   height:39px;
   overflow:hidden;
   background-color:#99ff33;
  
}

  .topnav a {
  text-decoration:none;
  float: left;
  display: block;
  color: black;
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
   color: blck;
}


    header {
	background-image:url("download.JPG");
     background-position: left;
	  background-repeat: no-repeat;
	  background-size: 180px 126px;
	  
    padding:3px;
    height:120px;
    font-size:22px;
    color: black;
    background-color:#cc00ff;
    text-align: center;
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
<fieldset style="width:98%"><legend><h2>SUGGESTIONS</h2></legend> 
<a href="apage.php">BACK</a><br><br>
 <form action="afs.php" method="POST" > 
 <?php
  $servername = "localhost";
      $username = "root";
      $password = "";
	  $dbname="complaints";
      $conn = mysqli_connect ($servername, $username, $password,$dbname);
 
      $result =  mysqli_query($conn,"SELECT * FROM suggest1 ");
	  ?>
      <table border="1">
       <tr height="90">
	 
      <th height="90" width="1%">FACULTY ID</th>
      <th  width="15%">SUGGESTION</th>
      </tr>
	  
        <?php  
		while($row = mysqli_fetch_array($result))
		  {
              
              echo "<tr height='90'>";
              echo "<td width='10%'>" . $row['facultyid'] . "</td>";
               echo "<td width='5%'>" . $row['sugg'] . "</td>";
               echo "</tr>";
          }
          echo "</table>";
     
    ?>
     
     
    </body>
    </html>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 