<?php
include('dbconnection.php');
if(isset($_POST['edit']))
{
//$id=$_POST['id'];
$pnm=$_POST['pnm'];
//$pcolor=$_POST['pcolor'];
//$fresh=$_POST['fresh'];
//$price=$_POST['price'];
//$file=$_FILES["file"]["name"];
$v="UPDATE product SET pname='$_POST[pnm]'";
if(mysqli_query($conn,$v))
{
     echo 'updated!';
//header("location:productview.php");
}
else
{
  echo 'nottt updated!';
}
}
?>
