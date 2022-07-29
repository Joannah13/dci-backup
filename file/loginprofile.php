<html>
  <head>
    <style>
       span[id='name']
        {
        color:#f1f6ba;
        font-size:20;
        display:block;
        text-align:center;       
        }
       span[id='mail']
        {
        display:block;
        text-align:center;
        color:#f1f6ba;
        font-size:12;
        }
        .logout a
        {
         background:red;
         text-decoration:none;
         color:#f1f6ba;
         font-size:13;
         border:2px solid red;
         height:4%;
         width:50%;
         margin-left:50px;
         margin-top:10px;
         margin-bottom:10px;
         text-align:center;
        }
    </style>
  </head>
<body>
<h1>
<?php 
    session_start();
    if(isset($_SESSION['email']))
    {
    include('dbconnection.php');
    $sql="select * from users where email='".$_SESSION['email']."' limit 1";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result))
    {
      $file="http://localhost/file/upload/".$row[10];
      echo "<img src=".$file.">"."<br>"."<br>";
    }
    echo "<br>"."<span id='name'>".$_SESSION['uname']."</span>"."<br>";
    echo "<br>"."<span id='mail'>".$_SESSION['email']."</span>"."<br>";
    }
    else
    {
      header("location:loginpage.php");
    }
    //echo "";
    //.$row[1]."<br>"  echo "</table>";"<br>".$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].    
?>
<div class="logout">
<a href="logout.php">LOG-OUT</a>
</div>
   </h1>
</body>
</html>