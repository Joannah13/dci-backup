<?php
include('dbconnection.php');
if(isset($_POST['view'])){
    $id=$_POST['id'];
}

//$id=$_GET['id'];
$sql = "SELECT * FROM product WHERE id=$id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){ 
//$row = mysqli_fetch_array($result);
$file="http://localhost/file/upload/".$row[5];
echo   "<label>Product-id:</label>".$row[0]."<br>";
echo   "<label>Product-name:</label>".$row[1]."<br>";
echo   "<label>Product-freshness:</label>".$row[2]."<br>";
echo   "<label>Product-color:</label>".$row[3]."<br>";
echo   "<label>Product-price:</label>".$row[4]."<br>";
echo "<img src=".$file.">"."<br>"."<br>";
}

?>

